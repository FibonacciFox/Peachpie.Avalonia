package com.peachpie.avalonia.rider

import com.intellij.openapi.components.Service
import com.intellij.openapi.components.service
import com.intellij.openapi.project.Project
import kotlinx.serialization.json.Json
import java.nio.file.Files
import java.nio.file.Path
import kotlin.io.path.exists

@Service(Service.Level.PROJECT)
class PeachpieAvaloniaIndexService(private val project: Project) {
    private val json = Json { ignoreUnknownKeys = true }

    @Volatile
    var currentIndex: AxamlAnalysisResult = AxamlAnalysisResult()
        private set

    fun refresh() {
        val basePath = project.basePath ?: return
        val indexPath = Path.of(basePath, ".peachpie-rider", "index.json")
        if (!indexPath.exists()) {
            currentIndex = AxamlAnalysisResult()
            return
        }

        currentIndex = Files.newBufferedReader(indexPath).use { reader ->
            json.decodeFromString(AxamlAnalysisResult.serializer(), reader.readText())
        }
    }

    fun findTargets(sourcePath: String, line: Int): List<AxamlNavigationTarget> =
        currentIndex.navigationTargets.filter { it.sourcePath.equals(sourcePath, ignoreCase = true) && it.sourceLine == line }

    fun findDiagnostics(sourcePath: String, line: Int): List<AxamlBindingDiagnostic> =
        currentIndex.diagnostics.filter { it.filePath.equals(sourcePath, ignoreCase = true) && it.line == line }

    fun getBindingCompletions(sourcePath: String, line: Int, prefix: String): List<AxamlCompletionItem> {
        val document = currentIndex.axamlDocuments.firstOrNull { it.filePath.equals(sourcePath, ignoreCase = true) } ?: return emptyList()
        val binding = document.bindings.firstOrNull { it.line == line } ?: document.bindings.lastOrNull { it.line <= line }
        val contextType = binding?.contextTypeName ?: document.xDataType ?: return emptyList()
        val className = resolveTypeName(contextType, document.xmlnsAliases) ?: return emptyList()
        val phpClass = currentIndex.phpClasses.firstOrNull { it.fullName == className } ?: return emptyList()

        return phpClass.members
            .filter { it.name.startsWith(prefix, ignoreCase = true) }
            .groupBy { it.name.lowercase() }
            .values
            .map { members -> members.minBy { memberPriority(it) } }
            .sortedBy { it.name.lowercase() }
            .map {
                AxamlCompletionItem(
                    name = it.name,
                    kind = if (it.kind == 0) "property" else "method",
                    symbol = "${phpClass.fullName}.${it.declaredName}",
                    targetPath = phpClass.filePath,
                    targetLine = it.line,
                )
            }
    }

    private fun resolveTypeName(typeName: String, aliases: Map<String, String>): String? {
        val parts = typeName.split(':', limit = 2)
        if (parts.size == 1) {
            return parts[0]
        }

        val alias = parts[0]
        val shortName = parts[1]
        val namespace = aliases[alias] ?: return null
        if (!namespace.startsWith("using:")) {
            return null
        }

        return namespace.removePrefix("using:").replace('\\', '.') + "." + shortName
    }

    private fun memberPriority(member: PhpMemberSymbol): Int {
        if (member.kind == 0) {
            return when {
                member.declaredName.startsWith("get_") -> 0
                member.declaredName.startsWith("set_") -> 1
                else -> 2
            }
        }

        return 3
    }

    companion object {
        fun getInstance(project: Project): PeachpieAvaloniaIndexService = project.service()
    }
}

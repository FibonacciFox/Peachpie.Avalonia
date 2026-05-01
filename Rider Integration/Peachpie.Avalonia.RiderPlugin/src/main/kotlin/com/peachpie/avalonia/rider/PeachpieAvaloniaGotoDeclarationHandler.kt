package com.peachpie.avalonia.rider

import com.intellij.codeInsight.navigation.actions.GotoDeclarationHandler
import com.intellij.openapi.editor.Editor
import com.intellij.openapi.vfs.LocalFileSystem
import com.intellij.psi.PsiElement
import com.intellij.psi.PsiManager
import com.intellij.psi.xml.XmlAttribute
import com.intellij.psi.xml.XmlAttributeValue

class PeachpieAvaloniaGotoDeclarationHandler : GotoDeclarationHandler {
    override fun getGotoDeclarationTargets(sourceElement: PsiElement?, offset: Int, editor: Editor): Array<PsiElement>? {
        val xmlValue = sourceElement?.parent as? XmlAttributeValue ?: return null
        val virtualFile = xmlValue.containingFile?.virtualFile ?: return null
        if (!virtualFile.name.endsWith(".axaml", ignoreCase = true)) {
            return null
        }

        val project = sourceElement.project
        val service = PeachpieAvaloniaIndexService.getInstance(project)
        val line = BindingValueSupport.getLineNumber(xmlValue, offset)
        val attribute = xmlValue.parent as? XmlAttribute ?: return null
        val targets = service.findTargets(virtualFile.path, line)
            .filter { matchesAttribute(attribute, xmlValue, it) }
        if (targets.isEmpty()) {
            return null
        }

        val psiManager = PsiManager.getInstance(project)
        return targets.mapNotNull { target ->
            val targetFile = LocalFileSystem.getInstance().findFileByPath(target.targetPath) ?: return@mapNotNull null
            val psiFile = psiManager.findFile(targetFile) ?: return@mapNotNull null
            val document = psiFile.viewProvider.document ?: return@mapNotNull psiFile
            val targetOffset = if (target.targetLine > 0 && target.targetLine <= document.lineCount) {
                document.getLineStartOffset(target.targetLine - 1)
            } else {
                0
            }

            psiFile.findElementAt(targetOffset) ?: psiFile
        }.toTypedArray().takeIf { it.isNotEmpty() }
    }

    override fun getActionText(context: com.intellij.openapi.actionSystem.DataContext): String? = null

    private fun matchesAttribute(attribute: XmlAttribute, value: XmlAttributeValue, target: AxamlNavigationTarget): Boolean {
        return BindingValueSupport.matchesTarget(attribute, value, target)
    }
}

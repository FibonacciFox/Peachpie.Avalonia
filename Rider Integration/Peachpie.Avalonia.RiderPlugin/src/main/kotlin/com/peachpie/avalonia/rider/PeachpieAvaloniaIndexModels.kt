package com.peachpie.avalonia.rider

import kotlinx.serialization.SerialName
import kotlinx.serialization.Serializable

@Serializable
data class AxamlNavigationTarget(
    @SerialName("SourcePath")
    val sourcePath: String,
    @SerialName("SourceLine")
    val sourceLine: Int,
    @SerialName("TargetPath")
    val targetPath: String,
    @SerialName("TargetLine")
    val targetLine: Int,
    @SerialName("Kind")
    val kind: String,
    @SerialName("Symbol")
    val symbol: String,
)

@Serializable
data class AxamlBindingDiagnostic(
    @SerialName("FilePath")
    val filePath: String,
    @SerialName("Line")
    val line: Int,
    @SerialName("Code")
    val code: String,
    @SerialName("Message")
    val message: String,
)

@Serializable
data class AxamlAnalysisResult(
    @SerialName("Diagnostics")
    val diagnostics: List<AxamlBindingDiagnostic> = emptyList(),
    @SerialName("NavigationTargets")
    val navigationTargets: List<AxamlNavigationTarget> = emptyList(),
    @SerialName("PhpClasses")
    val phpClasses: List<PhpClassSymbol> = emptyList(),
    @SerialName("AxamlDocuments")
    val axamlDocuments: List<AxamlDocumentModel> = emptyList(),
)

@Serializable
data class AxamlDocumentModel(
    @SerialName("FilePath")
    val filePath: String,
    @SerialName("XClass")
    val xClass: String? = null,
    @SerialName("XDataType")
    val xDataType: String? = null,
    @SerialName("XmlnsAliases")
    val xmlnsAliases: Map<String, String> = emptyMap(),
    @SerialName("Bindings")
    val bindings: List<AxamlBindingReference> = emptyList(),
)

@Serializable
data class AxamlBindingReference(
    @SerialName("Path")
    val path: String,
    @SerialName("Line")
    val line: Int,
    @SerialName("AttributeName")
    val attributeName: String,
    @SerialName("ContextTypeName")
    val contextTypeName: String? = null,
)

@Serializable
data class PhpClassSymbol(
    @SerialName("Namespace")
    val namespace: String,
    @SerialName("Name")
    val name: String,
    @SerialName("FilePath")
    val filePath: String,
    @SerialName("Line")
    val line: Int,
    @SerialName("Members")
    val members: List<PhpMemberSymbol> = emptyList(),
    @SerialName("FullName")
    val fullName: String,
)

@Serializable
data class PhpMemberSymbol(
    @SerialName("Name")
    val name: String,
    @SerialName("Kind")
    val kind: Int,
    @SerialName("DeclaredName")
    val declaredName: String,
    @SerialName("Line")
    val line: Int,
)

@Serializable
data class AxamlCompletionItem(
    @SerialName("Name")
    val name: String,
    @SerialName("Kind")
    val kind: String,
    @SerialName("Symbol")
    val symbol: String,
    @SerialName("TargetPath")
    val targetPath: String,
    @SerialName("TargetLine")
    val targetLine: Int,
)

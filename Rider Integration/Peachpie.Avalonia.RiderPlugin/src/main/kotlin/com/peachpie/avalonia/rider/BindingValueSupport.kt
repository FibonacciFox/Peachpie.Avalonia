package com.peachpie.avalonia.rider

import com.intellij.openapi.editor.Document
import com.intellij.psi.xml.XmlAttribute
import com.intellij.psi.xml.XmlAttributeValue

object BindingValueSupport {
    private val simpleBindingRegex = Regex("""\{Binding\s+(?:[^}]*?\bPath=)?\s*([A-Za-z_][A-Za-z0-9_]*)?$""")
    private val bindingPathRegex = Regex("""\{Binding\s+(?:[^}]*?\bPath=)?\s*([A-Za-z_][A-Za-z0-9_]*)""")

    fun extractBindingPrefix(value: XmlAttributeValue, offset: Int): String? {
        val localOffset = offset - value.textRange.startOffset
        if (localOffset <= 0) {
            return null
        }

        val text = value.value
        val safeOffset = (localOffset - 1).coerceIn(0, text.length)
        val prefixText = text.substring(0, safeOffset)
        val match = simpleBindingRegex.find(prefixText) ?: return null
        return match.groupValues.getOrNull(1) ?: ""
    }

    fun getLineNumber(value: XmlAttributeValue, offset: Int): Int {
        val document = value.containingFile?.viewProvider?.document ?: return 1
        val safeOffset = offset.coerceIn(0, document.textLength.coerceAtLeast(0))
        return document.getLineNumber(safeOffset) + 1
    }

    fun extractBindingPath(value: XmlAttributeValue): String? =
        bindingPathRegex.find(value.value)?.groupValues?.getOrNull(1)

    fun matchesTarget(attribute: XmlAttribute, value: XmlAttributeValue, target: AxamlNavigationTarget): Boolean {
        return when (attribute.localName) {
            "Class" -> target.kind == "x:Class"
            "DataType" -> target.kind == "x:DataType"
            else -> {
                val bindingPath = extractBindingPath(value) ?: return false
                target.kind.startsWith("binding-") && target.symbol.endsWith(".$bindingPath")
            }
        }
    }

    fun matchesDiagnostic(attribute: XmlAttribute, value: XmlAttributeValue, diagnostic: AxamlBindingDiagnostic): Boolean {
        return when (attribute.localName) {
            "Class" -> diagnostic.code == "AXAML001"
            "DataType" -> diagnostic.code == "AXAML002"
            else -> diagnostic.code == "AXAML003" && extractBindingPath(value)?.let { diagnostic.message.contains("'$it'") } == true
        }
    }
}

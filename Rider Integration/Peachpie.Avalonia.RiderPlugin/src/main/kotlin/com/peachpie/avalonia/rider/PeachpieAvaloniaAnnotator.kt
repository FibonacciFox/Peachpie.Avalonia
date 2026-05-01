package com.peachpie.avalonia.rider

import com.intellij.lang.annotation.AnnotationHolder
import com.intellij.lang.annotation.Annotator
import com.intellij.lang.annotation.HighlightSeverity
import com.intellij.psi.PsiElement
import com.intellij.psi.xml.XmlAttribute
import com.intellij.psi.xml.XmlAttributeValue

class PeachpieAvaloniaAnnotator : Annotator {
    override fun annotate(element: PsiElement, holder: AnnotationHolder) {
        val xmlValue = element as? XmlAttributeValue ?: return
        val file = xmlValue.containingFile?.virtualFile ?: return
        if (!file.name.endsWith(".axaml", ignoreCase = true)) {
            return
        }

        val attribute = xmlValue.parent as? XmlAttribute ?: return
        val service = PeachpieAvaloniaIndexService.getInstance(element.project)
        val line = BindingValueSupport.getLineNumber(xmlValue, xmlValue.textRange.startOffset)
        val diagnostics = service.findDiagnostics(file.path, line)
            .filter { BindingValueSupport.matchesDiagnostic(attribute, xmlValue, it) }

        for (diagnostic in diagnostics) {
            holder.newAnnotation(HighlightSeverity.ERROR, diagnostic.message)
                .range(xmlValue.textRange)
                .create()
        }
    }
}

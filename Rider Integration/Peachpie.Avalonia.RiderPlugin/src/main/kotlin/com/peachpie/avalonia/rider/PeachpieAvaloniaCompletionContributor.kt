package com.peachpie.avalonia.rider

import com.intellij.codeInsight.completion.CompletionContributor
import com.intellij.codeInsight.completion.CompletionParameters
import com.intellij.codeInsight.completion.CompletionProvider
import com.intellij.codeInsight.completion.CompletionResultSet
import com.intellij.codeInsight.completion.CompletionType
import com.intellij.codeInsight.lookup.LookupElementBuilder
import com.intellij.patterns.PlatformPatterns
import com.intellij.patterns.XmlPatterns
import com.intellij.psi.PsiElement
import com.intellij.psi.xml.XmlAttributeValue
import com.intellij.util.ProcessingContext

class PeachpieAvaloniaCompletionContributor : CompletionContributor() {
    init {
        extend(
            CompletionType.BASIC,
            PlatformPatterns.psiElement().inside(XmlPatterns.xmlAttributeValue()),
            object : CompletionProvider<CompletionParameters>() {
                override fun addCompletions(
                    parameters: CompletionParameters,
                    context: ProcessingContext,
                    resultSet: CompletionResultSet,
                ) {
                    val xmlValue = parameters.position.parent as? XmlAttributeValue ?: return
                    val file = xmlValue.containingFile?.virtualFile ?: return
                    if (!file.name.endsWith(".axaml", ignoreCase = true)) {
                        return
                    }

                    val prefix = BindingValueSupport.extractBindingPrefix(xmlValue, parameters.offset)
                    if (prefix == null) {
                        return
                    }

                    val project = parameters.position.project
                    val service = PeachpieAvaloniaIndexService.getInstance(project)
                    val line = BindingValueSupport.getLineNumber(xmlValue, parameters.offset)
                    val items = service.getBindingCompletions(file.path, line, prefix)
                    for (item in items) {
                        resultSet.addElement(
                            LookupElementBuilder.create(item.name)
                                .withTypeText(item.kind, true)
                                .withTailText("  ${item.symbol}", true),
                        )
                    }
                }
            },
        )
    }
}

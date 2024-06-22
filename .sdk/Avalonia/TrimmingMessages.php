<?php
namespace Avalonia;
class TrimmingMessages extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const ImplicitTypeConversionSupressWarningMessage = 'Implicit conversion methods might be removed by the linker. We don't have a reliable way to prevent it, except converting everything in compile time when possible.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ImplicitTypeConversionRequiresUnreferencedCodeMessage = 'Implicit conversion methods are required for type conversion.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const TypeConversionSupressWarningMessage = 'Conversion methods might be removed by the linker. We don't have a reliable way to prevent it, except converting everything in compile time when possible.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const TypeConversionRequiresUnreferencedCodeMessage = 'Conversion methods are required for type conversion, including op_Implicit, op_Explicit, Parse and TypeConverter.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ReflectionBindingRequiresUnreferencedCodeMessage = 'BindingExpression and ReflectionBinding heavily use reflection. Consider using CompiledBindings instead.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ReflectionBindingSupressWarningMessage = 'BindingExpression and ReflectionBinding internal heavily use reflection.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const CompiledBindingSafeSupressWarningMessage = 'CompiledBinding preserves members used in the expression tree.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ExpressionNodeRequiresUnreferencedCodeMessage = 'ExpressionNode might require unreferenced code.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ExpressionSafeSupressWarningMessage = 'Typed Expressions preserves members used in the expression tree.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const SelectorsParseRequiresUnreferencedCodeMessage = 'Selectors runtime parser might require unreferenced code. Consider using stronly typed selectors factory with 'new Style(s => s.OfType<Button>())' syntax.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const PropertyAccessorsRequiresUnreferencedCodeMessage = 'PropertyAccessors might require unreferenced code.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DataValidationPluginRequiresUnreferencedCodeMessage = 'DataValidationPlugin might require unreferenced code.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const StreamPluginRequiresUnreferencedCodeMessage = 'StreamPlugin might require unreferenced code.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const StyleResourceIncludeRequiresUnreferenceCodeMessage = 'StyleInclude and ResourceInclude use AvaloniaXamlLoader.Load which dynamically loads referenced assembly with Avalonia resources. Note, StyleInclude and ResourceInclude defined in XAML are resolved compile time and are safe with trimming and AOT.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const AvaloniaXamlLoaderRequiresUnreferenceCodeMessage = 'AvaloniaXamlLoader.Load(uri, baseUri) dynamically loads referenced assembly with Avalonia resources.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const XamlTypeResolvedRequiresUnreferenceCodeMessage = 'XamlTypeResolver might require unreferenced code.';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const IgnoreNativeAotSupressWarningMessage = 'This method is not supported by NativeAOT.';

}
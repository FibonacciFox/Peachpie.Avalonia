<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextBlockMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_1($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_2($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_1($routedEvent, $handler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_2($routedEvent, $handler){}
	/**
	 * @return \Avalonia\Controls\Classes
	 */
	#[MethodOverride] public  function get_Classes_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Classes_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_1($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_2($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_2($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($binding, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
class TextBlock extends \Avalonia\Controls\Control implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\IDataContextProvider,
	\Avalonia\LogicalTree\ILogical,
	\Avalonia\Styling\IThemeVariantHost,
	\Avalonia\Controls\IResourceHost,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Styling\IStyleHost,
	\Avalonia\Controls\ISetLogicalParent,
	\Avalonia\Controls\ISetInheritanceParent,
	\System\ComponentModel\ISupportInitialize,
	\Avalonia\Styling\IStyleable,
	\Avalonia\INamed,
	\Avalonia\Input\IInputElement,
	\Avalonia\Controls\Templates\IDataTemplateHost,
	\Avalonia\Rendering\IVisualBrushInitialize,
	\Avalonia\Styling\ISetterValue,
	\Avalonia\Controls\Documents\IInlineHost
{
	/**
	 * @return \Avalonia\Media\TextFormatting\TextLayout
	 */
	public  function get_TextLayout(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_Padding(){}
	/**
	 * @param \Avalonia\Thickness $value
	 * @return \System\Void|void
	 */
	public  function set_Padding($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Background(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_Background($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Text($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebugText(){}
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	public  function get_FontFamily(){}
	/**
	 * @param \Avalonia\Media\FontFamily $value
	 * @return \System\Void|void
	 */
	public  function set_FontFamily($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontSize(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_FontSize($value){}
	/**
	 * @return \Avalonia\Media\FontStyle
	 */
	public  function get_FontStyle(){}
	/**
	 * @param \Avalonia\Media\FontStyle $value
	 * @return \System\Void|void
	 */
	public  function set_FontStyle($value){}
	/**
	 * @return \Avalonia\Media\FontWeight
	 */
	public  function get_FontWeight(){}
	/**
	 * @param \Avalonia\Media\FontWeight $value
	 * @return \System\Void|void
	 */
	public  function set_FontWeight($value){}
	/**
	 * @return \Avalonia\Media\FontStretch
	 */
	public  function get_FontStretch(){}
	/**
	 * @param \Avalonia\Media\FontStretch $value
	 * @return \System\Void|void
	 */
	public  function set_FontStretch($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Foreground(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_Foreground($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LineHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_LineHeight($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LetterSpacing(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_LetterSpacing($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxLines(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaxLines($value){}
	/**
	 * @return \Avalonia\Media\TextWrapping
	 */
	public  function get_TextWrapping(){}
	/**
	 * @param \Avalonia\Media\TextWrapping $value
	 * @return \System\Void|void
	 */
	public  function set_TextWrapping($value){}
	/**
	 * @return \Avalonia\Media\TextTrimming
	 */
	public  function get_TextTrimming(){}
	/**
	 * @param \Avalonia\Media\TextTrimming $value
	 * @return \System\Void|void
	 */
	public  function set_TextTrimming($value){}
	/**
	 * @return \Avalonia\Media\TextAlignment
	 */
	public  function get_TextAlignment(){}
	/**
	 * @param \Avalonia\Media\TextAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_TextAlignment($value){}
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public  function get_TextDecorations(){}
	/**
	 * @param \Avalonia\Media\TextDecorationCollection $value
	 * @return \System\Void|void
	 */
	public  function set_TextDecorations($value){}
	/**
	 * @return \Avalonia\Controls\Documents\InlineCollection
	 */
	public  function get_Inlines(){}
	/**
	 * @param \Avalonia\Controls\Documents\InlineCollection $value
	 * @return \System\Void|void
	 */
	public  function set_Inlines($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasComplexContent(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_BaselineOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_BaselineOffset($value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetBaselineOffset($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public static function SetBaselineOffset($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextAlignment
	 */
	public static function GetTextAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextAlignment $alignment
	 * @return \System\Void|void
	 */
	public static function SetTextAlignment($control, $alignment){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextWrapping
	 */
	public static function GetTextWrapping($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextWrapping $wrapping
	 * @return \System\Void|void
	 */
	public static function SetTextWrapping($control, $wrapping){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\TextTrimming
	 */
	public static function GetTextTrimming($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\TextTrimming $trimming
	 * @return \System\Void|void
	 */
	public static function SetTextTrimming($control, $trimming){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetLineHeight($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $height
	 * @return \System\Void|void
	 */
	public static function SetLineHeight($control, $height){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Double|double
	 */
	public static function GetLetterSpacing($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Double|double $letterSpacing
	 * @return \System\Void|void
	 */
	public static function SetLetterSpacing($control, $letterSpacing){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Int32|int
	 */
	public static function GetMaxLines($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Int32|int $maxLines
	 * @return \System\Void|void
	 */
	public static function SetMaxLines($control, $maxLines){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	protected  function RenderCore($context){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	protected  function RenderTextLayout($context, $origin){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearTextInternal(){}
	/**
	 * @param \System\String|string $text
	 * @return \Avalonia\Media\TextFormatting\TextLayout
	 */
	protected  function CreateTextLayout($text){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateTextLayout(){}
	/**
	 * @param \System\Int32|int $maxLines
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidMaxLines($maxLines){}
	/**
	 * @param \System\Double|double $lineHeight
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidLineHeight($lineHeight){}
	/**
	 * @param \Avalonia\Controls\Documents\InlineCollection $oldValue
	 * @param \Avalonia\Controls\Documents\InlineCollection $newValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnInlinesChanged($oldValue, $newValue){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Invalidate(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDataTemplatesInitialized(){}
	/**
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($setter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses TextBlockMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TextBlockMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TextBlockMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::get_Classes_1 ()
	 * @uses TextBlockMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TextBlockMethodsOverride::get_LogicalChildren_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsAttachedToLogicalTree(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LogicalParent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsStylesInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyAttachedToLogicalTree($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyDetachedFromLogicalTree($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyResourcesChanged($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyHostedResourcesChanged($e){}
	/**
	 * @uses TextBlockMethodsOverride::SetParent_1 ($parent)
	 * @uses TextBlockMethodsOverride::SetParent_2 ($parent)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetParent(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesAdded($styles){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesRemoved($styles){}
	/**
	 * @uses TextBlockMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TextBlockMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TextBlockMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::get_Item_1 ($property)
	 * @uses TextBlockMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TextBlockMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::ClearValue_1 ($property)
	 * @uses TextBlockMethodsOverride::ClearValue_2 ($property)
	 * @uses TextBlockMethodsOverride::ClearValue_3 ($property)
	 * @uses TextBlockMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::GetValue_1 ($property)
	 * @uses TextBlockMethodsOverride::GetValue_2 ($property)
	 * @uses TextBlockMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TextBlockMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TextBlockMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TextBlockMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TextBlockMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TextBlockMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TextBlockMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TextBlockMethodsOverride::Bind_5 ($property, $source)
	 * @uses TextBlockMethodsOverride::Bind_6 ($property, $source)
	 * @uses TextBlockMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TextBlockMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TextBlockMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TextBlockMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TextBlockMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

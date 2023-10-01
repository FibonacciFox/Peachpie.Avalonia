<?php
namespace Avalonia\Controls\Presenters;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextPresenterMethodsOverride
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
class TextPresenter extends \Avalonia\Controls\Control implements 
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
	\Avalonia\Styling\ISetterValue
{
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CaretBoundsChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CaretBoundsChanged($value){}
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
	 * @return \System\String|string
	 */
	public  function get_PreeditText(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PreeditText($value){}
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
	 * @return \Avalonia\Media\TextWrapping
	 */
	public  function get_TextWrapping(){}
	/**
	 * @param \Avalonia\Media\TextWrapping $value
	 * @return \System\Void|void
	 */
	public  function set_TextWrapping($value){}
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
	 * @return \Avalonia\Media\TextAlignment
	 */
	public  function get_TextAlignment(){}
	/**
	 * @param \Avalonia\Media\TextAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_TextAlignment($value){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextLayout
	 */
	public  function get_TextLayout(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CaretIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_CaretIndex($value){}
	/**
	 * @return \System\Char
	 */
	public  function get_PasswordChar(){}
	/**
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	public  function set_PasswordChar($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RevealPassword(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_RevealPassword($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_SelectionBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionBrush($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_SelectionForegroundBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionForegroundBrush($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_CaretBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_CaretBrush($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SelectionStart(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionStart($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SelectionEnd(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionEnd($value){}
	/**
	 * @param \Avalonia\Size $constraint
	 * @param \System\String|string $text
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Collections\Generic\IReadOnlyList_1 $textStyleOverrides
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTextLayoutInternal($constraint, $text, $typeface, $textStyleOverrides){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RenderInternal($context){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCaretPoints(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ShowCaret(){}
	/**
	 * @return \System\Void|void
	 */
	public  function HideCaret(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function CaretChanged(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextLayout
	 */
	protected  function CreateTextLayout(){}
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $caretIndex
	 * @param \System\String|string $preeditText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCombinedText($text, $caretIndex, $preeditText){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateTextLayout(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CaretTimerTick($sender, $e){}
	/**
	 * @param \System\Int32|int $textPosition
	 * @param \System\Boolean $trailingEdge
	 * @return \System\Void|void
	 */
	public  function MoveCaretToTextPosition($textPosition, $trailingEdge){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Void|void
	 */
	public  function MoveCaretToPoint($point){}
	/**
	 * @param \Avalonia\Media\TextFormatting\LogicalDirection $direction
	 * @return \System\Void|void
	 */
	public  function MoveCaretVertical($direction){}
	/**
	 * @param \Avalonia\Media\TextFormatting\LogicalDirection $direction
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetNextCharacterHit($direction){}
	/**
	 * @param \Avalonia\Media\TextFormatting\LogicalDirection $direction
	 * @return \System\Void|void
	 */
	public  function MoveCaretHorizontal($direction){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @param \System\Boolean $notify
	 * @return \System\Void|void
	 */
	protected  function UpdateCaret($characterHit, $notify){}
	/**
	 * @return \Avalonia\Rect
	 */
	protected  function GetCursorRectangle(){}
	/**
	 * @param \System\String|string $preeditText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPreeditTextChanged($preeditText){}
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
	 * @uses TextPresenterMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TextPresenterMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TextPresenterMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::get_Classes_1 ()
	 * @uses TextPresenterMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TextPresenterMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses TextPresenterMethodsOverride::SetParent_1 ($parent)
	 * @uses TextPresenterMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TextPresenterMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TextPresenterMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TextPresenterMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::get_Item_1 ($property)
	 * @uses TextPresenterMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TextPresenterMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::ClearValue_1 ($property)
	 * @uses TextPresenterMethodsOverride::ClearValue_2 ($property)
	 * @uses TextPresenterMethodsOverride::ClearValue_3 ($property)
	 * @uses TextPresenterMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::GetValue_1 ($property)
	 * @uses TextPresenterMethodsOverride::GetValue_2 ($property)
	 * @uses TextPresenterMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TextPresenterMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TextPresenterMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TextPresenterMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TextPresenterMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TextPresenterMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TextPresenterMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TextPresenterMethodsOverride::Bind_5 ($property, $source)
	 * @uses TextPresenterMethodsOverride::Bind_6 ($property, $source)
	 * @uses TextPresenterMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TextPresenterMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TextPresenterMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TextPresenterMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TextPresenterMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

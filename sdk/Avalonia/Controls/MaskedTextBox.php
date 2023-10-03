<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MaskedTextBoxMethodsOverride
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
class MaskedTextBox extends \Avalonia\Controls\TextBox implements 
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
	\Avalonia\Controls\Utils\IUndoRedoHost
{
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \System\Char $baseValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoercePasswordChar($sender, $baseValue){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \System\Char $baseValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoercePromptChar($sender, $baseValue){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AsciiOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AsciiOnly($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_Culture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public  function set_Culture($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HidePromptOnLeave(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_HidePromptOnLeave($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Mask(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Mask($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_MaskCompleted(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_MaskFull(){}
	/**
	 * @return \System\ComponentModel\MaskedTextProvider
	 */
	public  function get_MaskProvider(){}
	/**
	 * @param \System\ComponentModel\MaskedTextProvider $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_MaskProvider($value){}
	/**
	 * @return \System\Char
	 */
	public  function get_PromptChar(){}
	/**
	 * @param \System\Char $value
	 * @return \System\Void|void
	 */
	public  function set_PromptChar($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ResetOnPrompt(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ResetOnPrompt($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ResetOnSpace(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ResetOnSpace($value){}
	/**
	 * @param \System\Int32|int $startPosition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextCharacterPosition($startPosition){}
	/**
	 * @param \System\ComponentModel\MaskedTextProvider $provider
	 * @param \System\Int32|int $position
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RefreshText($provider, $position){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UndoRedoState(){}
	/**
	 * @param \Avalonia\Controls\UndoRedoState $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UndoRedoState($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnUndoStackChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnRedoStackChanged(){}
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
	 * @uses MaskedTextBoxMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses MaskedTextBoxMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses MaskedTextBoxMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::get_Classes_1 ()
	 * @uses MaskedTextBoxMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::get_LogicalChildren_1 ()
	 * @uses MaskedTextBoxMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses MaskedTextBoxMethodsOverride::SetParent_1 ($parent)
	 * @uses MaskedTextBoxMethodsOverride::SetParent_2 ($parent)
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
	 * @uses MaskedTextBoxMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses MaskedTextBoxMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses MaskedTextBoxMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::get_Item_1 ($property)
	 * @uses MaskedTextBoxMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::set_Item_1 ($property, $value)
	 * @uses MaskedTextBoxMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::ClearValue_1 ($property)
	 * @uses MaskedTextBoxMethodsOverride::ClearValue_2 ($property)
	 * @uses MaskedTextBoxMethodsOverride::ClearValue_3 ($property)
	 * @uses MaskedTextBoxMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::GetValue_1 ($property)
	 * @uses MaskedTextBoxMethodsOverride::GetValue_2 ($property)
	 * @uses MaskedTextBoxMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses MaskedTextBoxMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses MaskedTextBoxMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses MaskedTextBoxMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses MaskedTextBoxMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses MaskedTextBoxMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses MaskedTextBoxMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses MaskedTextBoxMethodsOverride::Bind_5 ($property, $source)
	 * @uses MaskedTextBoxMethodsOverride::Bind_6 ($property, $source)
	 * @uses MaskedTextBoxMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses MaskedTextBoxMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses MaskedTextBoxMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses MaskedTextBoxMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

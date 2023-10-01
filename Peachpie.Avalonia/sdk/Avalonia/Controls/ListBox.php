<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ListBoxMethodsOverride
{
	/**
	 * @return \System\Collections\IList
	 */
	#[MethodOverride] public  function get_SelectedItems_1(){}
	/**
	 * @return \System\Collections\IList
	 */
	#[MethodOverride] protected  function get_SelectedItems_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_SelectedItems_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function set_SelectedItems_2($value){}
	/**
	 * @return \Avalonia\Controls\Selection\ISelectionModel
	 */
	#[MethodOverride] public  function get_Selection_1(){}
	/**
	 * @return \Avalonia\Controls\Selection\ISelectionModel
	 */
	#[MethodOverride] protected  function get_Selection_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Selection_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function set_Selection_2($value){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	#[MethodOverride] public  function get_SelectionMode_1(){}
	/**
	 * @return \Avalonia\Controls\SelectionMode
	 */
	#[MethodOverride] protected  function get_SelectionMode_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_SelectionMode_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function set_SelectionMode_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_2($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_1($direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_2($from, $direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UpdateSelection_1($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UpdateSelection_2($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
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
class ListBox extends \Avalonia\Controls\Primitives\SelectingItemsControl implements 
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
	\Avalonia\LogicalTree\IChildIndexProvider
{
	/**
	 * @return \Avalonia\Controls\Primitives\IScrollable
	 */
	public  function get_Scroll(){}
	/**
	 * @param \Avalonia\Controls\Primitives\IScrollable $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Scroll($value){}
	/**
	 * @uses ListBoxMethodsOverride::get_SelectedItems_1 ()
	 * @uses ListBoxMethodsOverride::get_SelectedItems_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItems(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::set_SelectedItems_1 ($value)
	 * @uses ListBoxMethodsOverride::set_SelectedItems_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItems(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::get_Selection_1 ()
	 * @uses ListBoxMethodsOverride::get_Selection_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Selection(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::set_Selection_1 ($value)
	 * @uses ListBoxMethodsOverride::set_Selection_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Selection(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::get_SelectionMode_1 ()
	 * @uses ListBoxMethodsOverride::get_SelectionMode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectionMode(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::set_SelectionMode_1 ($value)
	 * @uses ListBoxMethodsOverride::set_SelectionMode_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectionMode(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function SelectAll(){}
	/**
	 * @return \System\Void|void
	 */
	public  function UnselectAll(){}
	/**
	 * @param \Avalonia\Controls\Control $source
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function UpdateSelectionFromPointerEvent($source, $e){}
	/**
	 * @uses ListBoxMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses ListBoxMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::MoveSelection_1 ($direction, $wrap, $rangeModifier)
	 * @uses ListBoxMethodsOverride::MoveSelection_2 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses ListBoxMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UpdateSelection(mixed ...$args){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ChildIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ChildIndexChanged($value){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChildIndex($child){}
	/**
	 * @param \System\Int32& $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetTotalCount($count){}
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
	 * @uses ListBoxMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ListBoxMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ListBoxMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::get_Classes_1 ()
	 * @uses ListBoxMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ListBoxMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses ListBoxMethodsOverride::SetParent_1 ($parent)
	 * @uses ListBoxMethodsOverride::SetParent_2 ($parent)
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
	 * @uses ListBoxMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ListBoxMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ListBoxMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::get_Item_1 ($property)
	 * @uses ListBoxMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ListBoxMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::ClearValue_1 ($property)
	 * @uses ListBoxMethodsOverride::ClearValue_2 ($property)
	 * @uses ListBoxMethodsOverride::ClearValue_3 ($property)
	 * @uses ListBoxMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::GetValue_1 ($property)
	 * @uses ListBoxMethodsOverride::GetValue_2 ($property)
	 * @uses ListBoxMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ListBoxMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ListBoxMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ListBoxMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ListBoxMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ListBoxMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ListBoxMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ListBoxMethodsOverride::Bind_5 ($property, $source)
	 * @uses ListBoxMethodsOverride::Bind_6 ($property, $source)
	 * @uses ListBoxMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ListBoxMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ListBoxMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ListBoxMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ListBoxMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

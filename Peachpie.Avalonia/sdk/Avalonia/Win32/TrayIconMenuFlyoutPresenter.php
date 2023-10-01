<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TrayIconMenuFlyoutPresenterMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Platform\IMenuInteractionHandler
	 */
	#[MethodOverride] private  function get_InteractionHandler_1(){}
	/**
	 * @return \Avalonia\Controls\Platform\IMenuInteractionHandler
	 */
	#[MethodOverride] protected  function get_InteractionHandler_2(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	#[MethodOverride] private  function get_VisualRoot_1(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	#[MethodOverride] protected  function get_VisualRoot_2(){}
	/**
	 * @return \Avalonia\Controls\IMenuItem
	 */
	#[MethodOverride] private  function get_SelectedItem_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_SelectedItem_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_SelectedItem_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_SelectedItem_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function MoveSelection_1($direction, $wrap){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_2($direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_3($from, $direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_2($item){}
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
class TrayIconMenuFlyoutPresenter extends \Avalonia\Controls\MenuFlyoutPresenter implements 
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
	\Avalonia\LogicalTree\IChildIndexProvider,
	\Avalonia\Input\IFocusScope,
	\Avalonia\Controls\IMenu,
	\Avalonia\Controls\IMenuElement
{
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_InteractionHandler_1 ()
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_InteractionHandler_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_InteractionHandler(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_VisualRoot_1 ()
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_VisualRoot_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_VisualRoot(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_SelectedItem_1 ()
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_SelectedItem_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItem(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::set_SelectedItem_1 ($value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::set_SelectedItem_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItem(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SubItems(){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::MoveSelection_1 ($direction, $wrap)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::MoveSelection_2 ($direction, $wrap, $rangeModifier)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::MoveSelection_3 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
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
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_Classes_1 ()
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetParent_1 ($parent)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_Item_1 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ClearValue_1 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ClearValue_2 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ClearValue_3 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::GetValue_1 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::GetValue_2 ($property)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_5 ($property, $source)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_6 ($property, $source)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TrayIconMenuFlyoutPresenterMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

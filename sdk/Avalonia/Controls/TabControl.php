<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TabControlMethodsOverride
{
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function RegisterContentPresenter_1($presenter){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function RegisterContentPresenter_2($presenter){}
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
class TabControl extends \Avalonia\Controls\Primitives\SelectingItemsControl implements 
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
	\Avalonia\Controls\Presenters\IContentPresenterHost
{
	/**
	 * @return \Avalonia\Layout\HorizontalAlignment
	 */
	public  function get_HorizontalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\HorizontalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalContentAlignment($value){}
	/**
	 * @return \Avalonia\Layout\VerticalAlignment
	 */
	public  function get_VerticalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\VerticalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalContentAlignment($value){}
	/**
	 * @return \Avalonia\Controls\Dock
	 */
	public  function get_TabStripPlacement(){}
	/**
	 * @param \Avalonia\Controls\Dock $value
	 * @return \System\Void|void
	 */
	public  function set_TabStripPlacement($value){}
	/**
	 * @return \Avalonia\Controls\Templates\IDataTemplate
	 */
	public  function get_ContentTemplate(){}
	/**
	 * @param \Avalonia\Controls\Templates\IDataTemplate $value
	 * @return \System\Void|void
	 */
	public  function set_ContentTemplate($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SelectedContent(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_SelectedContent($value){}
	/**
	 * @return \Avalonia\Controls\Templates\IDataTemplate
	 */
	public  function get_SelectedContentTemplate(){}
	/**
	 * @param \Avalonia\Controls\Templates\IDataTemplate $value
	 * @return \System\Void|void
	 */
	protected  function set_SelectedContentTemplate($value){}
	/**
	 * @return \Avalonia\Controls\Presenters\ItemsPresenter
	 */
	protected  function get_ItemsPresenterPart(){}
	/**
	 * @param \Avalonia\Controls\Presenters\ItemsPresenter $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ItemsPresenterPart($value){}
	/**
	 * @return \Avalonia\Controls\Presenters\ContentPresenter
	 */
	protected  function get_ContentPart(){}
	/**
	 * @param \Avalonia\Controls\Presenters\ContentPresenter $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ContentPart($value){}
	/**
	 * @uses TabControlMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TabControlMethodsOverride::get_LogicalChildren_2 ()
	 * @uses TabControlMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses TabControlMethodsOverride::RegisterContentPresenter_2 ($presenter)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RegisterContentPresenter(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateSelectedContent($container){}
	/**
	 * @uses TabControlMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses TabControlMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::MoveSelection_1 ($direction, $wrap, $rangeModifier)
	 * @uses TabControlMethodsOverride::MoveSelection_2 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses TabControlMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
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
	 * @uses TabControlMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TabControlMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TabControlMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::get_Classes_1 ()
	 * @uses TabControlMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
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
	 * @uses TabControlMethodsOverride::SetParent_1 ($parent)
	 * @uses TabControlMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TabControlMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TabControlMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TabControlMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::get_Item_1 ($property)
	 * @uses TabControlMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TabControlMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::ClearValue_1 ($property)
	 * @uses TabControlMethodsOverride::ClearValue_2 ($property)
	 * @uses TabControlMethodsOverride::ClearValue_3 ($property)
	 * @uses TabControlMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::GetValue_1 ($property)
	 * @uses TabControlMethodsOverride::GetValue_2 ($property)
	 * @uses TabControlMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TabControlMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TabControlMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TabControlMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TabControlMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TabControlMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TabControlMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TabControlMethodsOverride::Bind_5 ($property, $source)
	 * @uses TabControlMethodsOverride::Bind_6 ($property, $source)
	 * @uses TabControlMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TabControlMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TabControlMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TabControlMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TabControlMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

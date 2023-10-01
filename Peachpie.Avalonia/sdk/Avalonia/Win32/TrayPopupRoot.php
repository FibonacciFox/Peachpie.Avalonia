<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TrayPopupRootMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	#[MethodOverride] public  function get_PlatformImpl_1(){}
	/**
	 * @return \Avalonia\Platform\IWindowBaseImpl
	 */
	#[MethodOverride] public  function get_PlatformImpl_2(){}
	/**
	 * @return \Avalonia\Platform\ITopLevelImpl
	 */
	#[MethodOverride] public  function get_PlatformImpl_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Close_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Close_2($dialogResult){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Show_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Show_2($owner){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function ShowDialog_1($owner){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function ShowDialog_2($owner){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function EnsureInitialized_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function EnsureInitialized_2(){}
	/**
	 * @return \Avalonia\Layout\ILayoutManager
	 */
	#[MethodOverride] protected  function get_LayoutManager_1(){}
	/**
	 * @return \Avalonia\Layout\ILayoutManager
	 */
	#[MethodOverride] private  function get_LayoutManager_2(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositingRenderer
	 */
	#[MethodOverride] protected  function get_Renderer_1(){}
	/**
	 * @return \Avalonia\Rendering\IRenderer
	 */
	#[MethodOverride] private  function get_Renderer_2(){}
	/**
	 * @return \Avalonia\Rendering\IHitTester
	 */
	#[MethodOverride] protected  function get_HitTester_1(){}
	/**
	 * @return \Avalonia\Rendering\IHitTester
	 */
	#[MethodOverride] private  function get_HitTester_2(){}
	/**
	 * @return \Avalonia\Styling\IStyleHost
	 */
	#[MethodOverride] private  function get_StylingParent_1(){}
	/**
	 * @return \Avalonia\Styling\IStyleHost
	 */
	#[MethodOverride] private  function get_StylingParent_2(){}
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
class TrayPopupRoot extends \Avalonia\Controls\Window implements 
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
	\Avalonia\Controls\IContentControl,
	\Avalonia\Controls\Presenters\IContentPresenterHost,
	\Avalonia\Input\IInputRoot,
	\Avalonia\Layout\ILayoutRoot,
	\Avalonia\Rendering\IRenderRoot,
	\Avalonia\Input\ICloseable,
	\Avalonia\LogicalTree\ILogicalRoot,
	\Avalonia\Input\TextInput\ITextInputMethodRoot,
	\Avalonia\Input\IFocusScope
{
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TrayPopupRoot_Deactivated($sender, $e){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveResize($position, $size, $scaling){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_PlatformImpl_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_PlatformImpl_2 ()
	 * @uses TrayPopupRootMethodsOverride::get_PlatformImpl_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::Close_1 ()
	 * @uses TrayPopupRootMethodsOverride::Close_2 ($dialogResult)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Close(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::Show_1 ()
	 * @uses TrayPopupRootMethodsOverride::Show_2 ($owner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Show(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::ShowDialog_1 ($owner)
	 * @uses TrayPopupRootMethodsOverride::ShowDialog_2 ($owner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShowDialog(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::EnsureInitialized_1 ()
	 * @uses TrayPopupRootMethodsOverride::EnsureInitialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureInitialized(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_LayoutManager_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_Renderer_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_HitTester_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_HitTester_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_HitTester(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_KeyboardNavigationHandler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PointerOverElement(){}
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_PointerOverElement($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ShowAccessKeys(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ShowAccessKeys($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LayoutScaling(){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_StylingParent_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_StylingParent_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_StylingParent(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PointToClient($p){}
	/**
	 * @param \Avalonia\Point $p
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PointToScreen($p){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InputMethod(){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_LogicalChildren_2 ()
	 * @uses TrayPopupRootMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses TrayPopupRootMethodsOverride::RegisterContentPresenter_2 ($presenter)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RegisterContentPresenter(mixed ...$args){}
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
	 * @uses TrayPopupRootMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TrayPopupRootMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TrayPopupRootMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_Classes_1 ()
	 * @uses TrayPopupRootMethodsOverride::get_Classes_2 ()
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
	 * @uses TrayPopupRootMethodsOverride::SetParent_1 ($parent)
	 * @uses TrayPopupRootMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TrayPopupRootMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TrayPopupRootMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TrayPopupRootMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::get_Item_1 ($property)
	 * @uses TrayPopupRootMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TrayPopupRootMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::ClearValue_1 ($property)
	 * @uses TrayPopupRootMethodsOverride::ClearValue_2 ($property)
	 * @uses TrayPopupRootMethodsOverride::ClearValue_3 ($property)
	 * @uses TrayPopupRootMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::GetValue_1 ($property)
	 * @uses TrayPopupRootMethodsOverride::GetValue_2 ($property)
	 * @uses TrayPopupRootMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TrayPopupRootMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TrayPopupRootMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TrayPopupRootMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TrayPopupRootMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TrayPopupRootMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TrayPopupRootMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TrayPopupRootMethodsOverride::Bind_5 ($property, $source)
	 * @uses TrayPopupRootMethodsOverride::Bind_6 ($property, $source)
	 * @uses TrayPopupRootMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TrayPopupRootMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TrayPopupRootMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayPopupRootMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TrayPopupRootMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

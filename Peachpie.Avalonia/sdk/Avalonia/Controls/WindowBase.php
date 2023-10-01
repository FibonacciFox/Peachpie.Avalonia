<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowBaseMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IWindowBaseImpl
	 */
	#[MethodOverride] public  function get_PlatformImpl_1(){}
	/**
	 * @return \Avalonia\Platform\ITopLevelImpl
	 */
	#[MethodOverride] public  function get_PlatformImpl_2(){}
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
class WindowBase extends \Avalonia\Controls\TopLevel implements 
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
	\Avalonia\Input\TextInput\ITextInputMethodRoot
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IgnoreVisibilityChanges(){}
	/**
	 * @return \System\IDisposable
	 */
	protected  function FreezeVisibilityChangeHandling(){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Activated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Activated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Deactivated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Deactivated($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_PositionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_PositionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Resized($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Resized($value){}
	/**
	 * @uses WindowBaseMethodsOverride::get_PlatformImpl_1 ()
	 * @uses WindowBaseMethodsOverride::get_PlatformImpl_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsActive($value){}
	/**
	 * @return \Avalonia\Controls\Screens
	 */
	public  function get_Screens(){}
	/**
	 * @return \Avalonia\Controls\WindowBase
	 */
	public  function get_Owner(){}
	/**
	 * @param \Avalonia\Controls\WindowBase $value
	 * @return \System\Void|void
	 */
	protected  function set_Owner($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Topmost(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Topmost($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Show(){}
	/**
	 * @uses WindowBaseMethodsOverride::EnsureInitialized_1 ()
	 * @uses WindowBaseMethodsOverride::EnsureInitialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureInitialized(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\WindowResizedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnResized($e){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Size
	 */
	protected  function ArrangeSetBounds($size){}
	/**
	 * @param \Avalonia\PixelPoint $pos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandlePositionChanged($pos){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleActivated(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleDeactivated(){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function IsVisibleChanged($e){}
	/**
	 * @uses WindowBaseMethodsOverride::get_LayoutManager_1 ()
	 * @uses WindowBaseMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::get_Renderer_1 ()
	 * @uses WindowBaseMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::get_HitTester_1 ()
	 * @uses WindowBaseMethodsOverride::get_HitTester_2 ()
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
	 * @uses WindowBaseMethodsOverride::get_StylingParent_1 ()
	 * @uses WindowBaseMethodsOverride::get_StylingParent_2 ()
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
	 * @uses WindowBaseMethodsOverride::get_LogicalChildren_1 ()
	 * @uses WindowBaseMethodsOverride::get_LogicalChildren_2 ()
	 * @uses WindowBaseMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses WindowBaseMethodsOverride::RegisterContentPresenter_2 ($presenter)
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
	 * @uses WindowBaseMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses WindowBaseMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses WindowBaseMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::get_Classes_1 ()
	 * @uses WindowBaseMethodsOverride::get_Classes_2 ()
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
	 * @uses WindowBaseMethodsOverride::SetParent_1 ($parent)
	 * @uses WindowBaseMethodsOverride::SetParent_2 ($parent)
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
	 * @uses WindowBaseMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses WindowBaseMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses WindowBaseMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::get_Item_1 ($property)
	 * @uses WindowBaseMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::set_Item_1 ($property, $value)
	 * @uses WindowBaseMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::ClearValue_1 ($property)
	 * @uses WindowBaseMethodsOverride::ClearValue_2 ($property)
	 * @uses WindowBaseMethodsOverride::ClearValue_3 ($property)
	 * @uses WindowBaseMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::GetValue_1 ($property)
	 * @uses WindowBaseMethodsOverride::GetValue_2 ($property)
	 * @uses WindowBaseMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses WindowBaseMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses WindowBaseMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses WindowBaseMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses WindowBaseMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses WindowBaseMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses WindowBaseMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses WindowBaseMethodsOverride::Bind_5 ($property, $source)
	 * @uses WindowBaseMethodsOverride::Bind_6 ($property, $source)
	 * @uses WindowBaseMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses WindowBaseMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses WindowBaseMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowBaseMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses WindowBaseMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowMethodsOverride
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
class Window extends \Avalonia\Controls\WindowBase implements 
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
	 * @uses WindowMethodsOverride::get_PlatformImpl_1 ()
	 * @uses WindowMethodsOverride::get_PlatformImpl_2 ()
	 * @uses WindowMethodsOverride::get_PlatformImpl_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_OwnedWindows(){}
	/**
	 * @return \Avalonia\Controls\SizeToContent
	 */
	public  function get_SizeToContent(){}
	/**
	 * @param \Avalonia\Controls\SizeToContent $value
	 * @return \System\Void|void
	 */
	public  function set_SizeToContent($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Title(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Title($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ExtendClientAreaToDecorationsHint(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaToDecorationsHint($value){}
	/**
	 * @return \Avalonia\Platform\ExtendClientAreaChromeHints
	 */
	public  function get_ExtendClientAreaChromeHints(){}
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaChromeHints($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ExtendClientAreaTitleBarHeightHint(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaTitleBarHeightHint($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsExtendedIntoWindowDecorations(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsExtendedIntoWindowDecorations($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_WindowDecorationMargin(){}
	/**
	 * @param \Avalonia\Thickness $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WindowDecorationMargin($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @param \Avalonia\Thickness $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OffScreenMargin($value){}
	/**
	 * @return \Avalonia\Controls\SystemDecorations
	 */
	public  function get_SystemDecorations(){}
	/**
	 * @param \Avalonia\Controls\SystemDecorations $value
	 * @return \System\Void|void
	 */
	public  function set_SystemDecorations($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowActivated(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShowActivated($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowInTaskbar(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShowInTaskbar($value){}
	/**
	 * @return \Avalonia\Controls\WindowState
	 */
	public  function get_WindowState(){}
	/**
	 * @param \Avalonia\Controls\WindowState $value
	 * @return \System\Void|void
	 */
	public  function set_WindowState($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanResize(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_CanResize($value){}
	/**
	 * @return \Avalonia\Controls\WindowIcon
	 */
	public  function get_Icon(){}
	/**
	 * @param \Avalonia\Controls\WindowIcon $value
	 * @return \System\Void|void
	 */
	public  function set_Icon($value){}
	/**
	 * @return \Avalonia\Controls\WindowStartupLocation
	 */
	public  function get_WindowStartupLocation(){}
	/**
	 * @param \Avalonia\Controls\WindowStartupLocation $value
	 * @return \System\Void|void
	 */
	public  function set_WindowStartupLocation($value){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\PixelPoint $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginMoveDrag($e){}
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginResizeDrag($edge, $e){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Closing($value){}
	/**
	 * @uses WindowMethodsOverride::Close_1 ()
	 * @uses WindowMethodsOverride::Close_2 ($dialogResult)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Close(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\WindowCloseReason $reason
	 * @param \System\Boolean $isProgrammatic
	 * @return \System\Void|void
	 */
	protected  function CloseCore($reason, $isProgrammatic){}
	/**
	 * @param \Avalonia\Controls\WindowCloseReason $reason
	 * @return \System\Boolean
	 */
	protected  function HandleClosing($reason){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseInternal(){}
	/**
	 * @param \Avalonia\Controls\WindowClosingEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldCancelClose($args){}
	/**
	 * @param \Avalonia\Controls\WindowState $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleWindowStateChanged($state){}
	/**
	 * @param \System\Boolean $isExtended
	 * @return \System\Void|void
	 */
	protected  function ExtendClientAreaToDecorationsChanged($isExtended){}
	/**
	 * @uses WindowMethodsOverride::Show_1 ()
	 * @uses WindowMethodsOverride::Show_2 ($owner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Show(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureStateBeforeShow(){}
	/**
	 * @param \Avalonia\Controls\Window $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureParentStateBeforeShow($owner){}
	/**
	 * @param \Avalonia\Controls\Window $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowCore($owner){}
	/**
	 * @uses WindowMethodsOverride::ShowDialog_1 ($owner)
	 * @uses WindowMethodsOverride::ShowDialog_2 ($owner)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShowDialog(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateEnabled(){}
	/**
	 * @param \Avalonia\Controls\Window $window
	 * @param \System\Boolean $isDialog
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddChild($window, $isDialog){}
	/**
	 * @param \Avalonia\Controls\Window $window
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveChild($window){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnGotInputWhenDisabled(){}
	/**
	 * @param \Avalonia\Controls\Window $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetWindowStartupLocation($owner){}
	/**
	 * @param \Avalonia\Controls\WindowClosingEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnClosing($e){}
	/**
	 * @uses WindowMethodsOverride::EnsureInitialized_1 ()
	 * @uses WindowMethodsOverride::EnsureInitialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureInitialized(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::get_LayoutManager_1 ()
	 * @uses WindowMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::get_Renderer_1 ()
	 * @uses WindowMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::get_HitTester_1 ()
	 * @uses WindowMethodsOverride::get_HitTester_2 ()
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
	 * @uses WindowMethodsOverride::get_StylingParent_1 ()
	 * @uses WindowMethodsOverride::get_StylingParent_2 ()
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
	 * @uses WindowMethodsOverride::get_LogicalChildren_1 ()
	 * @uses WindowMethodsOverride::get_LogicalChildren_2 ()
	 * @uses WindowMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses WindowMethodsOverride::RegisterContentPresenter_2 ($presenter)
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
	 * @uses WindowMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses WindowMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses WindowMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::get_Classes_1 ()
	 * @uses WindowMethodsOverride::get_Classes_2 ()
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
	 * @uses WindowMethodsOverride::SetParent_1 ($parent)
	 * @uses WindowMethodsOverride::SetParent_2 ($parent)
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
	 * @uses WindowMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses WindowMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses WindowMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::get_Item_1 ($property)
	 * @uses WindowMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::set_Item_1 ($property, $value)
	 * @uses WindowMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::ClearValue_1 ($property)
	 * @uses WindowMethodsOverride::ClearValue_2 ($property)
	 * @uses WindowMethodsOverride::ClearValue_3 ($property)
	 * @uses WindowMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::GetValue_1 ($property)
	 * @uses WindowMethodsOverride::GetValue_2 ($property)
	 * @uses WindowMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses WindowMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses WindowMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses WindowMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses WindowMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses WindowMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses WindowMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses WindowMethodsOverride::Bind_5 ($property, $source)
	 * @uses WindowMethodsOverride::Bind_6 ($property, $source)
	 * @uses WindowMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses WindowMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses WindowMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses WindowMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses WindowMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

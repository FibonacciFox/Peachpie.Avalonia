<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TopLevelMethodsOverride
{
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
class TopLevel extends \Avalonia\Controls\ContentControl implements 
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ScalingChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ScalingChanged($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	protected  function set_ClientSize($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_FrameSize($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_TransparencyLevelHint(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyLevelHint($value){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_ActualTransparencyLevel(){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ActualTransparencyLevel($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_TransparencyBackgroundFallback(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyBackgroundFallback($value){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public  function get_RequestedThemeVariant(){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $value
	 * @return \System\Void|void
	 */
	public  function set_RequestedThemeVariant($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_BackRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_BackRequested($value){}
	/**
	 * @uses TopLevelMethodsOverride::get_LayoutManager_1 ()
	 * @uses TopLevelMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\ITopLevelImpl
	 */
	public  function get_PlatformImpl(){}
	/**
	 * @param \Avalonia\Platform\ITopLevelImpl $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_PlatformImpl($value){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function TryGetPlatformHandle(){}
	/**
	 * @uses TopLevelMethodsOverride::get_Renderer_1 ()
	 * @uses TopLevelMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::get_HitTester_1 ()
	 * @uses TopLevelMethodsOverride::get_HitTester_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_HitTester(mixed ...$args){}
	/**
	 * @return \Avalonia\Rendering\RendererDiagnostics
	 */
	public  function get_RendererDiagnostics(){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_LastPointerPosition(){}
	/**
	 * @return \Avalonia\Input\IAccessKeyHandler
	 */
	protected  function get_AccessKeyHandler(){}
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
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Media\SolidColorBrush $color
	 * @return \System\Void|void
	 */
	public static function SetSystemBarColor($control, $color){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Media\SolidColorBrush
	 */
	public static function GetSystemBarColor($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LayoutScaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @uses TopLevelMethodsOverride::get_StylingParent_1 ()
	 * @uses TopLevelMethodsOverride::get_StylingParent_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_StylingParent(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\Storage\IStorageProvider
	 */
	public  function get_StorageProvider(){}
	/**
	 * @return \Avalonia\Controls\Platform\IInsetsManager
	 */
	public  function get_InsetsManager(){}
	/**
	 * @return \Avalonia\Input\Platform\IClipboard
	 */
	public  function get_Clipboard(){}
	/**
	 * @return \Avalonia\Input\IFocusManager
	 */
	public  function get_FocusManager(){}
	/**
	 * @return \Avalonia\Platform\IPlatformSettings
	 */
	public  function get_PlatformSettings(){}
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
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Controls\TopLevel
	 */
	public static function GetTopLevel($visual){}
	/**
	 * @param \Avalonia\Controls\PlatformInhibitionType $type
	 * @param \System\String|string $reason
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function RequestPlatformInhibition($type, $reason){}
	/**
	 * @param \System\Action_1 $action
	 * @return \System\Void|void
	 */
	public  function RequestAnimationFrame($action){}
	/**
	 * @return \Avalonia\Layout\ILayoutManager
	 */
	protected  function CreateLayoutManager(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandlePaint($rect){}
	/**
	 * @return \System\Void|void
	 */
	protected  function StartRendering(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function StopRendering(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function HandleClosed(){}
	/**
	 * @param \Avalonia\Size $clientSize
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @return \System\Void|void
	 */
	protected  function HandleResized($clientSize, $reason){}
	/**
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleScalingChanged($scaling){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $transparencyLevel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleTransparencyLevelChanged($transparencyLevel){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnOpened($e){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnClosed($e){}
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetService($resolver){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleInput($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GlobalActualThemeVariantChanged($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Rendering\SceneInvalidatedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SceneInvalidated($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PlatformImpl_LostFocus(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_InputMethod(){}
	/**
	 * @uses TopLevelMethodsOverride::get_LogicalChildren_1 ()
	 * @uses TopLevelMethodsOverride::get_LogicalChildren_2 ()
	 * @uses TopLevelMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses TopLevelMethodsOverride::RegisterContentPresenter_2 ($presenter)
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses TopLevelMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses TopLevelMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses TopLevelMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::get_Classes_1 ()
	 * @uses TopLevelMethodsOverride::get_Classes_2 ()
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
	 * @uses TopLevelMethodsOverride::SetParent_1 ($parent)
	 * @uses TopLevelMethodsOverride::SetParent_2 ($parent)
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
	 * @uses TopLevelMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TopLevelMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TopLevelMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::get_Item_1 ($property)
	 * @uses TopLevelMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TopLevelMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::ClearValue_1 ($property)
	 * @uses TopLevelMethodsOverride::ClearValue_2 ($property)
	 * @uses TopLevelMethodsOverride::ClearValue_3 ($property)
	 * @uses TopLevelMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::GetValue_1 ($property)
	 * @uses TopLevelMethodsOverride::GetValue_2 ($property)
	 * @uses TopLevelMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TopLevelMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TopLevelMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TopLevelMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TopLevelMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TopLevelMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TopLevelMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TopLevelMethodsOverride::Bind_5 ($property, $source)
	 * @uses TopLevelMethodsOverride::Bind_6 ($property, $source)
	 * @uses TopLevelMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TopLevelMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TopLevelMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TopLevelMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TopLevelMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

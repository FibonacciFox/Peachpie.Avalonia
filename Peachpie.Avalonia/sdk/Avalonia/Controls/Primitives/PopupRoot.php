<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupRootMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPopupImpl
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
	 * @return \Avalonia\Styling\IStyleHost
	 */
	#[MethodOverride] private  function get_StylingParent_1(){}
	/**
	 * @return \Avalonia\Styling\IStyleHost
	 */
	#[MethodOverride] private  function get_StylingParent_2(){}
	/**
	 * @return \Avalonia\Styling\IStyleHost
	 */
	#[MethodOverride] private  function get_StylingParent_3(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_Width_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_Width_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Width_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Width_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_MinWidth_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_MinWidth_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_MinWidth_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_MinWidth_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_MaxWidth_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_MaxWidth_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_MaxWidth_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_MaxWidth_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_Height_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_Height_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Height_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Height_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_MinHeight_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_MinHeight_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_MinHeight_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_MinHeight_2($value){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] private  function get_MaxHeight_1(){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public  function get_MaxHeight_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_MaxHeight_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_MaxHeight_2($value){}
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
class PopupRoot extends \Avalonia\Controls\WindowBase implements 
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
	\Avalonia\VisualTree\IHostedVisualTreeRoot,
	\System\IDisposable,
	\Avalonia\Controls\Primitives\IPopupHost,
	\Avalonia\Input\IFocusScope
{
	/**
	 * @uses PopupRootMethodsOverride::get_PlatformImpl_1 ()
	 * @uses PopupRootMethodsOverride::get_PlatformImpl_2 ()
	 * @uses PopupRootMethodsOverride::get_PlatformImpl_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_PlatformImpl(mixed ...$args){}
	/**
	 * @return \Avalonia\Media\Transform
	 */
	public  function get_Transform(){}
	/**
	 * @param \Avalonia\Media\Transform $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Host(){}
	/**
	 * @uses PopupRootMethodsOverride::get_StylingParent_1 ()
	 * @uses PopupRootMethodsOverride::get_StylingParent_2 ()
	 * @uses PopupRootMethodsOverride::get_StylingParent_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_StylingParent(mixed ...$args){}
	/**
	 * @return \Avalonia\Controls\TopLevel
	 */
	public  function get_ParentTopLevel(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdatePosition(){}
	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Controls\PlacementMode $placement
	 * @param \Avalonia\Point $offset
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $anchor
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $constraintAdjustment
	 * @param \System\Nullable_1 $rect
	 * @return \System\Void|void
	 */
	public  function ConfigurePosition($target, $placement, $offset, $anchor, $gravity, $constraintAdjustment, $rect){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	public  function SetChild($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HostedVisualTreeRoot(){}
	/**
	 * @uses PopupRootMethodsOverride::get_Width_1 ()
	 * @uses PopupRootMethodsOverride::get_Width_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Width(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_Width_1 ($value)
	 * @uses PopupRootMethodsOverride::set_Width_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Width(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_MinWidth_1 ()
	 * @uses PopupRootMethodsOverride::get_MinWidth_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_MinWidth(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_MinWidth_1 ($value)
	 * @uses PopupRootMethodsOverride::set_MinWidth_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_MinWidth(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_MaxWidth_1 ()
	 * @uses PopupRootMethodsOverride::get_MaxWidth_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_MaxWidth(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_MaxWidth_1 ($value)
	 * @uses PopupRootMethodsOverride::set_MaxWidth_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_MaxWidth(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_Height_1 ()
	 * @uses PopupRootMethodsOverride::get_Height_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Height(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_Height_1 ($value)
	 * @uses PopupRootMethodsOverride::set_Height_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Height(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_MinHeight_1 ()
	 * @uses PopupRootMethodsOverride::get_MinHeight_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_MinHeight(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_MinHeight_1 ($value)
	 * @uses PopupRootMethodsOverride::set_MinHeight_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_MinHeight(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_MaxHeight_1 ()
	 * @uses PopupRootMethodsOverride::get_MaxHeight_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_MaxHeight(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_MaxHeight_1 ($value)
	 * @uses PopupRootMethodsOverride::set_MaxHeight_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_MaxHeight(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::EnsureInitialized_1 ()
	 * @uses PopupRootMethodsOverride::EnsureInitialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureInitialized(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_LayoutManager_1 ()
	 * @uses PopupRootMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_Renderer_1 ()
	 * @uses PopupRootMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_HitTester_1 ()
	 * @uses PopupRootMethodsOverride::get_HitTester_2 ()
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
	 * @uses PopupRootMethodsOverride::get_LogicalChildren_1 ()
	 * @uses PopupRootMethodsOverride::get_LogicalChildren_2 ()
	 * @uses PopupRootMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses PopupRootMethodsOverride::RegisterContentPresenter_2 ($presenter)
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
	 * @uses PopupRootMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses PopupRootMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses PopupRootMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_Classes_1 ()
	 * @uses PopupRootMethodsOverride::get_Classes_2 ()
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
	 * @uses PopupRootMethodsOverride::SetParent_1 ($parent)
	 * @uses PopupRootMethodsOverride::SetParent_2 ($parent)
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
	 * @uses PopupRootMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses PopupRootMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses PopupRootMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::get_Item_1 ($property)
	 * @uses PopupRootMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::set_Item_1 ($property, $value)
	 * @uses PopupRootMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::ClearValue_1 ($property)
	 * @uses PopupRootMethodsOverride::ClearValue_2 ($property)
	 * @uses PopupRootMethodsOverride::ClearValue_3 ($property)
	 * @uses PopupRootMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::GetValue_1 ($property)
	 * @uses PopupRootMethodsOverride::GetValue_2 ($property)
	 * @uses PopupRootMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses PopupRootMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses PopupRootMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses PopupRootMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses PopupRootMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses PopupRootMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses PopupRootMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses PopupRootMethodsOverride::Bind_5 ($property, $source)
	 * @uses PopupRootMethodsOverride::Bind_6 ($property, $source)
	 * @uses PopupRootMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PopupRootMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses PopupRootMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupRootMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses PopupRootMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

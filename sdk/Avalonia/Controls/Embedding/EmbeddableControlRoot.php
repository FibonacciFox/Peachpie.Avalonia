<?php
namespace Avalonia\Controls\Embedding;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmbeddableControlRootMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartRendering_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartRendering_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StopRendering_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StopRendering_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function EnsureInitialized_1(){}
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
class EmbeddableControlRoot extends \Avalonia\Controls\TopLevel implements 
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
	\Avalonia\Input\IFocusScope,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Rendering\IHitTester
	 * @field
	 */
	protected $HitTesterOverride;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $EnforceClientSize;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $ClientSize;
	/**
	 * @var \System\Nullable_1[Avalonia\Size]
	 * @property
	 */
	public $FrameSize;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelHint;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $ActualTransparencyLevel;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $TransparencyBackgroundFallback;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public $RequestedThemeVariant;
	/**
	 * @var \Avalonia\Platform\ITopLevelImpl
	 * @property
	 */
	public readonly $PlatformImpl;
	/**
	 * @var \Avalonia\Rendering\RendererDiagnostics
	 * @property
	 */
	public readonly $RendererDiagnostics;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $RenderScaling;
	/**
	 * @var \Avalonia\Platform\Storage\IStorageProvider
	 * @property
	 */
	public readonly $StorageProvider;
	/**
	 * @var \Avalonia\Controls\Platform\IInsetsManager
	 * @property
	 */
	public readonly $InsetsManager;
	/**
	 * @var \Avalonia\Input\Platform\IClipboard
	 * @property
	 */
	public readonly $Clipboard;
	/**
	 * @var \Avalonia\Input\IFocusManager
	 * @property
	 */
	public readonly $FocusManager;
	/**
	 * @var \Avalonia\Platform\IPlatformSettings
	 * @property
	 */
	public readonly $PlatformSettings;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Content;
	/**
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 * @property
	 */
	public $ContentTemplate;
	/**
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @property
	 */
	public readonly $Presenter;
	/**
	 * @var \Avalonia\Layout\HorizontalAlignment
	 * @property
	 */
	public $HorizontalContentAlignment;
	/**
	 * @var \Avalonia\Layout\VerticalAlignment
	 * @property
	 */
	public $VerticalContentAlignment;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Background;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $BorderBrush;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $BorderThickness;
	/**
	 * @var \Avalonia\CornerRadius
	 * @property
	 */
	public $CornerRadius;
	/**
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public $FontFamily;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $FontSize;
	/**
	 * @var \Avalonia\Media\FontStyle
	 * @property
	 */
	public $FontStyle;
	/**
	 * @var \Avalonia\Media\FontWeight
	 * @property
	 */
	public $FontWeight;
	/**
	 * @var \Avalonia\Media\FontStretch
	 * @property
	 */
	public $FontStretch;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Foreground;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $Padding;
	/**
	 * @var \Avalonia\Controls\Templates\IControlTemplate
	 * @property
	 */
	public $Template;
	/**
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 * @property
	 */
	public $FocusAdorner;
	/**
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @property
	 */
	public readonly $DataTemplates;
	/**
	 * @var \Avalonia\Controls\ContextMenu
	 * @property
	 */
	public $ContextMenu;
	/**
	 * @var \Avalonia\Controls\Primitives\FlyoutBase
	 * @property
	 */
	public $ContextFlyout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLoaded;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Tag;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Focusable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsEnabled;
	/**
	 * @var \Avalonia\Input\Cursor
	 * @property
	 */
	public $Cursor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsKeyboardFocusWithin;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFocused;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsHitTestVisible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsPointerOver;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsTabStop;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEffectivelyEnabled;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TabIndex;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyBinding]
	 * @property
	 */
	public readonly $KeyBindings;
	/**
	 * @var \Avalonia\Input\GestureRecognizers\GestureRecognizerCollection
	 * @property
	 */
	public readonly $GestureRecognizers;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MinWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MinHeight;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxHeight;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $Margin;
	/**
	 * @var \Avalonia\Layout\HorizontalAlignment
	 * @property
	 */
	public $HorizontalAlignment;
	/**
	 * @var \Avalonia\Layout\VerticalAlignment
	 * @property
	 */
	public $VerticalAlignment;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $DesiredSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMeasureValid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsArrangeValid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseLayoutRounding;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $Bounds;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ClipToBounds;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $Clip;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEffectivelyVisible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsVisible;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $OpacityMask;
	/**
	 * @var \Avalonia\Media\IEffect
	 * @property
	 */
	public $Effect;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasMirrorTransform;
	/**
	 * @var \Avalonia\Media\ITransform
	 * @property
	 */
	public $RenderTransform;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $RenderTransformOrigin;
	/**
	 * @var \Avalonia\Media\FlowDirection
	 * @property
	 */
	public $FlowDirection;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ZIndex;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \Avalonia\Controls\Classes
	 * @property
	 */
	public readonly $Classes;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $DataContext;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInitialized;
	/**
	 * @var \Avalonia\Styling\Styles
	 * @property
	 */
	public readonly $Styles;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $StyleKey;
	/**
	 * @var \Avalonia\Controls\IResourceDictionary
	 * @property
	 */
	public $Resources;
	/**
	 * @var \Avalonia\AvaloniaObject
	 * @property
	 */
	public $TemplatedParent;
	/**
	 * @var \Avalonia\Styling\ControlTheme
	 * @property
	 */
	public $Theme;
	/**
	 * @var \Avalonia\StyledElement
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $ActualThemeVariant;
	/**
	 * @var \Avalonia\Animation\Transitions
	 * @property
	 */
	public $Transitions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Boolean
	 */
	protected  function get_EnforceClientSize(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_EnforceClientSize($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Prepare(){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::StartRendering_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::StartRendering_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartRendering(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::StopRendering_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::StopRendering_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StopRendering(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::EnsureInitialized_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::EnsureInitialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnsureInitialized(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::get_LayoutManager_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_LayoutManager_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LayoutManager(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::get_Renderer_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_Renderer_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Renderer(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::get_HitTester_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_HitTester_2 ()
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
	 * @uses EmbeddableControlRootMethodsOverride::get_StylingParent_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_StylingParent_2 ()
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
	 * @uses EmbeddableControlRootMethodsOverride::get_LogicalChildren_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_LogicalChildren_2 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses EmbeddableControlRootMethodsOverride::RegisterContentPresenter_2 ($presenter)
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
	 * @uses EmbeddableControlRootMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses EmbeddableControlRootMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses EmbeddableControlRootMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::get_Classes_1 ()
	 * @uses EmbeddableControlRootMethodsOverride::get_Classes_2 ()
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
	 * @uses EmbeddableControlRootMethodsOverride::SetParent_1 ($parent)
	 * @uses EmbeddableControlRootMethodsOverride::SetParent_2 ($parent)
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
	 * @uses EmbeddableControlRootMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses EmbeddableControlRootMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses EmbeddableControlRootMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::get_Item_1 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::set_Item_1 ($property, $value)
	 * @uses EmbeddableControlRootMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::ClearValue_1 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::ClearValue_2 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::ClearValue_3 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::GetValue_1 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::GetValue_2 ($property)
	 * @uses EmbeddableControlRootMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses EmbeddableControlRootMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_5 ($property, $source)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_6 ($property, $source)
	 * @uses EmbeddableControlRootMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses EmbeddableControlRootMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses EmbeddableControlRootMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses EmbeddableControlRootMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

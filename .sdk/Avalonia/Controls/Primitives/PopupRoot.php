<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PopupRootOverride {
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_Width_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Width_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_MinWidth_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_MinWidth_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_MaxWidth_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_MaxWidth_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_Height_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Height_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_MinHeight_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_MinHeight_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_MaxHeight_1 (){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_MaxHeight_1 ($value){}
	/**
	 * @param \Avalonia\Controls\TopLevel $parent
	 * @param \Avalonia\Platform\IPopupImpl $impl
	 */
	#[MethodOverride]public function __construct_1 ($parent, $impl){}
	/**
	 * @param \Avalonia\Controls\TopLevel $parent
	 * @param \Avalonia\Platform\IPopupImpl $impl
	 * @param \Avalonia\IAvaloniaDependencyResolver $dependencyResolver
	 */
	#[MethodOverride]public function __construct_2 ($parent, $impl, $dependencyResolver){}
}
final class PopupRoot extends \Avalonia\Controls\WindowBase implements
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
	use PopupRootOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Transform]
	 */
	public static $TransformProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\IHitTester
	 */
	protected $HitTesterOverride;
	/**
	 * @property dublicate
	 * @var \Avalonia\Platform\IPopupImpl|\Avalonia\Platform\IWindowBaseImpl|\Avalonia\Platform\ITopLevelImpl
	 */
	public $PlatformImpl;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\Controls\TopLevel
	 * @since readonly
	 */
	public $ParentTopLevel;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsActive;
	/**
	 * @property
	 * @var \Avalonia\Controls\Screens
	 * @since readonly
	 */
	public $Screens;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowBase
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Topmost;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $DesktopScaling;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $ClientSize;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Size]
	 */
	public $FrameSize;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\WindowTransparencyLevel]
	 */
	public $TransparencyLevelHint;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @since readonly
	 */
	public $ActualTransparencyLevel;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $TransparencyBackgroundFallback;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 */
	public $RequestedThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Rendering\RendererDiagnostics
	 * @since readonly
	 */
	public $RendererDiagnostics;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $RenderScaling;
	/**
	 * @property
	 * @var \Avalonia\Platform\Storage\IStorageProvider
	 * @since readonly
	 */
	public $StorageProvider;
	/**
	 * @property
	 * @var \Avalonia\Controls\Platform\IInsetsManager
	 * @since readonly
	 */
	public $InsetsManager;
	/**
	 * @property
	 * @var \Avalonia\Input\Platform\IClipboard
	 * @since readonly
	 */
	public $Clipboard;
	/**
	 * @property
	 * @var \Avalonia\Input\IFocusManager
	 * @since readonly
	 */
	public $FocusManager;
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformSettings
	 * @since readonly
	 */
	public $PlatformSettings;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Content;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $ContentTemplate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @since readonly
	 */
	public $Presenter;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $BorderBrush;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $BorderThickness;
	/**
	 * @property
	 * @var \Avalonia\CornerRadius
	 */
	public $CornerRadius;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 */
	public $FontFamily;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $FontSize;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStyle
	 */
	public $FontStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\FontWeight
	 */
	public $FontWeight;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStretch
	 */
	public $FontStretch;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Foreground;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Padding;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IControlTemplate
	 */
	public $Template;
	/**
	 * @property
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 */
	public $FocusAdorner;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @since readonly
	 */
	public $DataTemplates;
	/**
	 * @property
	 * @var \Avalonia\Controls\ContextMenu
	 */
	public $ContextMenu;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\FlyoutBase
	 */
	public $ContextFlyout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLoaded;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Tag;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Focusable;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \Avalonia\Input\Cursor
	 */
	public $Cursor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsKeyboardFocusWithin;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFocused;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsHitTestVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsPointerOver;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTabStop;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyEnabled;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TabIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyBinding]
	 * @since readonly
	 */
	public $KeyBindings;
	/**
	 * @property
	 * @var \Avalonia\Input\GestureRecognizers\GestureRecognizerCollection
	 * @since readonly
	 */
	public $GestureRecognizers;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxHeight;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Margin;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $DesiredSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMeasureValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArrangeValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UseLayoutRounding;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipToBounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Clip;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $OpacityMask;
	/**
	 * @property
	 * @var \Avalonia\Media\IEffect
	 */
	public $Effect;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasMirrorTransform;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $RenderTransform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $RenderTransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ZIndex;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \Avalonia\Controls\Classes
	 * @since readonly
	 */
	public $Classes;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $DataContext;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInitialized;
	/**
	 * @property
	 * @var \Avalonia\Styling\Styles
	 * @since readonly
	 */
	public $Styles;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $StyleKey;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 */
	public $TemplatedParent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $Theme;
	/**
	 * @property
	 * @var \Avalonia\StyledElement
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $ActualThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function get_Host(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function UpdatePosition(){}
	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Controls\PlacementMode $placement
	 * @param \Avalonia\Point $offset
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $anchor
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $constraintAdjustment
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @return \System\Void|void
	 */
	public function ConfigurePosition($target, $placement, $offset, $anchor, $gravity, $constraintAdjustment, $rect){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Void|void
	 */
	public function SetChild($control){}
	private function get_HostedVisualTreeRoot(){}
	private function get_KeyboardNavigationHandler(){}
	private function get_PointerOverElement(){}
	private function set_PointerOverElement($value){}
	private function get_ShowAccessKeys(){}
	private function set_ShowAccessKeys($value){}
	private function get_LayoutScaling(){}
	private function PointToClient($p){}
	private function PointToScreen($p){}
	private function get_InputMethod(){}
	private function get_IsDataTemplatesInitialized(){}
	private function Initialize($setter){}
	private function get_IsAttachedToLogicalTree(){}
	private function get_LogicalParent(){}
	private function get_HasResources(){}
	private function get_IsStylesInitialized(){}
	private function NotifyAttachedToLogicalTree($e){}
	private function NotifyDetachedFromLogicalTree($e){}
	private function NotifyHostedResourcesChanged($e){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PopupRootOverride::__construct_1 <br>public , args: ($parent, $impl)<br>
	 * @uses PopupRootOverride::__construct_2 <br>public , args: ($parent, $impl, $dependencyResolver)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
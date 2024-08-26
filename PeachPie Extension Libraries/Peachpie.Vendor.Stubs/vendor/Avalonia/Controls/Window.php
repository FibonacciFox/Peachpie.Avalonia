<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WindowOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Close_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $dialogResult
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Close_2 ($dialogResult){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Window $owner
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function ShowDialog_1 ($owner){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Window $owner
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]public function ShowDialog_2 ($owner){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Platform\IWindowImpl $impl
	 */
	#[MethodOverride]public function __construct_2 ($impl){}
}
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
	use WindowOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SizeToContent]
	 */
	public static $SizeToContentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ExtendClientAreaToDecorationsHintProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Platform\ExtendClientAreaChromeHints]
	 */
	public static $ExtendClientAreaChromeHintsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ExtendClientAreaTitleBarHeightHintProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Window,System\Boolean]
	 */
	public static $IsExtendedIntoWindowDecorationsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Window,Avalonia\Thickness]
	 */
	public static $WindowDecorationMarginProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Window,Avalonia\Thickness]
	 */
	public static $OffScreenMarginProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SystemDecorations]
	 */
	public static $SystemDecorationsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ShowActivatedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ShowInTaskbarProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\WindowState]
	 */
	public static $WindowStateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $TitleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\WindowIcon]
	 */
	public static $IconProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\WindowStartupLocation]
	 */
	public static $WindowStartupLocationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $CanResizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $WindowClosedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $WindowOpenedEvent;
	/**
	 * @field
	 * @var \Avalonia\Rendering\IHitTester
	 */
	protected $HitTesterOverride;
	/**
	 * @property dublicate
	 * @var \Avalonia\Platform\IWindowImpl|\Avalonia\Platform\IWindowBaseImpl|\Avalonia\Platform\ITopLevelImpl
	 */
	public $PlatformImpl;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Controls\Window]
	 * @since readonly
	 */
	public $OwnedWindows;
	/**
	 * @property
	 * @var \Avalonia\Controls\SizeToContent
	 */
	public $SizeToContent;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Title;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ExtendClientAreaToDecorationsHint;
	/**
	 * @property
	 * @var \Avalonia\Platform\ExtendClientAreaChromeHints
	 */
	public $ExtendClientAreaChromeHints;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ExtendClientAreaTitleBarHeightHint;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsExtendedIntoWindowDecorations;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $WindowDecorationMargin;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $OffScreenMargin;
	/**
	 * @property
	 * @var \Avalonia\Controls\SystemDecorations
	 */
	public $SystemDecorations;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ShowActivated;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ShowInTaskbar;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowState
	 */
	public $WindowState;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $CanResize;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowIcon
	 */
	public $Icon;
	/**
	 * @property
	 * @var \Avalonia\Controls\WindowStartupLocation
	 */
	public $WindowStartupLocation;
	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 */
	public $Position;
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
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public function BeginMoveDrag($e){}
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public function BeginResizeDrag($edge, $e){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\WindowClosingEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\WindowClosingEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Closing($value){}
	/**
	 * @uses WindowOverride::Close_1 <br>public , args: ()<br>
	 * @uses WindowOverride::Close_2 <br>public , args: ($dialogResult)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Close (\override ...$args){}
	/**
	 * @param \Avalonia\Controls\WindowCloseReason $reason
	 * @param \System\Boolean|bool $isProgrammatic
	 * @return \System\Void|void
	 */
	protected function CloseCore($reason, $isProgrammatic){}
	/**
	 * @param \Avalonia\Controls\WindowCloseReason $reason
	 * @return \System\Boolean|bool
	 */
	protected function HandleClosing($reason){}
	private function CloseInternal(){}
	private function ShouldCancelClose($args){}
	private function HandleWindowStateChanged($state){}
	/**
	 * @param \System\Boolean|bool $isExtended
	 * @return \System\Void|void
	 */
	protected function ExtendClientAreaToDecorationsChanged($isExtended){}
	private function EnsureStateBeforeShow(){}
	private function EnsureParentStateBeforeShow($owner){}
	private function ShowCore($owner){}
	/**
	 * @uses WindowOverride::ShowDialog_1 <br>public , args: ($owner)<br>
	 * @uses WindowOverride::ShowDialog_2 <br>public , args: ($owner)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShowDialog (\override ...$args){}
	private function UpdateEnabled(){}
	private function AddChild($window, $isDialog){}
	private function RemoveChild($window){}
	private function OnGotInputWhenDisabled(){}
	private function SetWindowStartupLocation($owner){}
	/**
	 * @param \Avalonia\Controls\WindowClosingEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnClosing($e){}
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
	 * @uses WindowOverride::__construct_1 <br>public , args: ()<br>
	 * @uses WindowOverride::__construct_2 <br>public , args: ($impl)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
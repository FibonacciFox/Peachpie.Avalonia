<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SplitViewOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\SplitViewDisplayMode $mode
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function GetPseudoClass_1 ($mode){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\SplitViewPanePlacement $placement
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function GetPseudoClass_2 ($placement){}
}
class SplitView extends \Avalonia\Controls\ContentControl implements
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
	\Avalonia\Controls\Presenters\IContentPresenterHost
{
	use SplitViewOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $CompactPaneLengthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SplitViewDisplayMode]
	 */
	public static $DisplayModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsPaneOpenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OpenPaneLengthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $PaneBackgroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SplitViewPanePlacement]
	 */
	public static $PanePlacementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $PaneProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Templates\IDataTemplate]
	 */
	public static $PaneTemplateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $UseLightDismissOverlayModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\SplitView,Avalonia\Controls\Primitives\SplitViewTemplateSettings]
	 */
	public static $TemplateSettingsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $PaneClosedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\CancelRoutedEventArgs]
	 */
	public static $PaneClosingEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $PaneOpenedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\CancelRoutedEventArgs]
	 */
	public static $PaneOpeningEvent;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $CompactPaneLength;
	/**
	 * @property
	 * @var \Avalonia\Controls\SplitViewDisplayMode
	 */
	public $DisplayMode;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsPaneOpen;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $OpenPaneLength;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $PaneBackground;
	/**
	 * @property
	 * @var \Avalonia\Controls\SplitViewPanePlacement
	 */
	public $PanePlacement;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Pane;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $PaneTemplate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UseLightDismissOverlayMode;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SplitViewTemplateSettings
	 */
	public $TemplateSettings;
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
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PaneClosed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PaneClosed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PaneClosing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PaneClosing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PaneOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PaneOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PaneOpening($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PaneOpening($value){}
	private function PointerReleasedOutside($sender, $e){}
	private function IsInOverlayMode(){}
	/**
	 * @param \Avalonia\Interactivity\CancelRoutedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPaneOpening($args){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPaneOpened($args){}
	/**
	 * @param \Avalonia\Interactivity\CancelRoutedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPaneClosing($args){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPaneClosed($args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SplitViewOverride::GetPseudoClass_1 <br>private , args: ($mode)<br>
	 * @uses SplitViewOverride::GetPseudoClass_2 <br>private , args: ($placement)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function GetPseudoClass (\override ...$args){}
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Boolean|bool
	 */
	protected function OnCoerceIsPaneOpen($value){}
	private function UpdateVisualStateForCompactPaneLength($newLen){}
	private function UpdateVisualStateForDisplayMode($newValue){}
	private function UpdateVisualStateForPanePlacementProperty($newValue){}
	private function EnableLightDismiss(){}
	private function TopLevelBackRequested($sender, $e){}
	private static function CoerceIsPaneOpen($instance, $value){}
	private function get_IsDataTemplatesInitialized(){}
	private function Initialize($setter){}
	private function EnsureInitialized(){}
	private function get_IsAttachedToLogicalTree(){}
	private function get_LogicalParent(){}
	private function get_HasResources(){}
	private function get_IsStylesInitialized(){}
	private function get_StylingParent(){}
	private function NotifyAttachedToLogicalTree($e){}
	private function NotifyDetachedFromLogicalTree($e){}
	private function NotifyHostedResourcesChanged($e){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}
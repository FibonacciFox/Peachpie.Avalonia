<?php
namespace Avalonia\Controls\Primitives;
class Popup extends \Avalonia\Controls\Control implements
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
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $WindowManagerAddShadowHintProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Control]
	 */
	public static $ChildProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $InheritsTransformProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsOpenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor]
	 */
	public static $PlacementAnchorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment]
	 */
	public static $PlacementConstraintAdjustmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupGravity]
	 */
	public static $PlacementGravityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 */
	public static $PlacementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 */
	public static $PlacementModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[Avalonia\Rect]]
	 */
	public static $PlacementRectProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Control]
	 */
	public static $PlacementTargetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $OverlayDismissEventPassThroughProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\IInputElement]
	 */
	public static $OverlayInputPassThroughElementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $HorizontalOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsLightDismissEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $VerticalOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $TopmostProperty;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\IPopupHost
	 * @since readonly
	 */
	public $Host;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $WindowManagerAddShadowHint;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 */
	public $Child;
	/**
	 * @property
	 * @var \Avalonia\IAvaloniaDependencyResolver
	 */
	public $DependencyResolver;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $InheritsTransform;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsLightDismissEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsOpen;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public $PlacementAnchor;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 */
	public $PlacementConstraintAdjustment;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public $PlacementGravity;
	/**
	 * @property
	 * @var \Avalonia\Controls\PlacementMode
	 */
	public $PlacementMode;
	/**
	 * @property
	 * @var \Avalonia\Controls\PlacementMode
	 */
	public $Placement;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 */
	public $PlacementRect;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 */
	public $PlacementTarget;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $OverlayDismissEventPassThrough;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputElement
	 */
	public $OverlayInputPassThroughElement;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $HorizontalOffset;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $VerticalOffset;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Topmost;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPointerOverPopup;
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
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function add_Closed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Opened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	protected function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	protected function remove_Closing($value){}
	private function get_PopupHost(){}
	private function add_PopupHostChanged($value){}
	private function remove_PopupHostChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Open(){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	private function UpdateHostPosition($popupHost, $placementTarget){}
	private function UpdateHostSizing($popupHost, $topLevel, $placementTarget){}
	private function HandlePositionChange(){}
	private static function SubscribeToEventHandler($target, $handler, $subscribe, $unsubscribe){}
	private static function WindowManagerAddShadowHintChanged($host, $hint){}
	private function IsOpenChanged($e){}
	private function ChildChanged($e){}
	private function CloseCore(){}
	private function ListenForNonClientClick($e){}
	private function PointerPressedDismissOverlay($sender, $e){}
	private static function PassThroughEvent($e){}
	private function RootTemplateApplied($sender, $e){}
	private function SetTemplatedParentAndApplyChildTemplates($control){}
	private function IsChildOrThis($child){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Boolean|bool
	 */
	public function IsInsidePopup($visual){}
	private function WindowDeactivated($sender, $e){}
	private function ParentClosed($sender, $e){}
	private function PlacementTargetTransformChanged($v, $matrix){}
	private function WindowLostFocus(){}
	private function WindowPositionChanged($pp){}
	private function PlacementTargetLayoutUpdated($src, $e){}
	private function ParentPopupPositionChanged($src, $e){}
	private function BeginIgnoringIsOpen(){}
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
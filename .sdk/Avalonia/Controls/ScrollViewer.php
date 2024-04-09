<?php
namespace Avalonia\Controls;
class ScrollViewer extends \Avalonia\Controls\ContentControl implements
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
	\Avalonia\Controls\Primitives\IScrollable,
	\Avalonia\Controls\IScrollAnchorProvider
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $BringIntoViewOnFocusChangeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 */
	public static $ExtentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Vector]
	 */
	public static $OffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 */
	public static $ViewportProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 */
	public static $LargeChangeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 */
	public static $SmallChangeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Vector]
	 */
	public static $ScrollBarMaximumProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\ScrollBarVisibility]
	 */
	public static $HorizontalScrollBarVisibilityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 */
	public static $HorizontalSnapPointsTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 */
	public static $VerticalSnapPointsTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 */
	public static $HorizontalSnapPointsAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 */
	public static $VerticalSnapPointsAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\ScrollBarVisibility]
	 */
	public static $VerticalScrollBarVisibilityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,System\Boolean]
	 */
	public static $IsExpandedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AllowAutoHideProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsScrollChainingEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsScrollInertiaEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsDeferredScrollingEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\ScrollChangedEventArgs]
	 */
	public static $ScrollChangedEvent;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const DefaultSmallChange = '16';
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $BringIntoViewOnFocusChange;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Extent;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Viewport;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $LargeChange;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $SmallChange;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public $HorizontalScrollBarVisibility;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public $VerticalScrollBarVisibility;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $CurrentAnchor;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $ScrollBarMaximum;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsExpanded;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public $HorizontalSnapPointsType;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public $VerticalSnapPointsType;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public $HorizontalSnapPointsAlignment;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public $VerticalSnapPointsAlignment;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowAutoHide;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsScrollChainingEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsScrollInertiaEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDeferredScrollingEnabled;
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
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ScrollChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ScrollChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ScrollChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ScrollChanged($value){}
	/**
	 * @return \System\Void|void
	 */
	public function LineUp(){}
	/**
	 * @return \System\Void|void
	 */
	public function LineDown(){}
	/**
	 * @return \System\Void|void
	 */
	public function LineLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public function LineRight(){}
	/**
	 * @return \System\Void|void
	 */
	public function PageUp(){}
	/**
	 * @return \System\Void|void
	 */
	public function PageDown(){}
	/**
	 * @return \System\Void|void
	 */
	public function PageLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public function PageRight(){}
	/**
	 * @return \System\Void|void
	 */
	public function ScrollToHome(){}
	/**
	 * @return \System\Void|void
	 */
	public function ScrollToEnd(){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetBringIntoViewOnFocusChange($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetBringIntoViewOnFocusChange($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public static function GetHorizontalScrollBarVisibility($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalScrollBarVisibility($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public static function GetHorizontalSnapPointsType($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalSnapPointsType($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public static function GetVerticalSnapPointsType($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalSnapPointsType($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public static function GetHorizontalSnapPointsAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalSnapPointsAlignment($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public static function GetVerticalSnapPointsAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalSnapPointsAlignment($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public static function GetVerticalScrollBarVisibility($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetAllowAutoHide($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetAllowAutoHide($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsScrollChainingEnabled($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetIsScrollChainingEnabled($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalScrollBarVisibility($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetIsScrollInertiaEnabled($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsScrollInertiaEnabled($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetIsDeferredScrollingEnabled($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsDeferredScrollingEnabled($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public function RegisterAnchorCandidate($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public function UnregisterAnchorCandidate($element){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \Avalonia\Vector $value
	 * @return \Avalonia\Vector
	 */
	protected static function CoerceOffset($sender, $value){}
	private static function Clamp($value, $min, $max){}
	private static function Max($x, $y){}
	private function ChildChanged($child){}
	private function LogicalScrollInvalidated($sender, $e){}
	private function CalculatedPropertiesChanged(){}
	/**
	 * @param \Avalonia\Controls\ScrollChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnScrollChanged($e){}
	private function SubscribeToScrollBars($e){}
	private function OnScrollBarExpandedChanged($isExpanded){}
	private function OnLayoutUpdated($sender, $e){}
	private function RaiseScrollChanged(){}
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
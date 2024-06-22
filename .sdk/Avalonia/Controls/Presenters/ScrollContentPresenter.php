<?php
namespace Avalonia\Controls\Presenters;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ScrollContentPresenterOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Control $to
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]private function TranslateBounds_1 ($control, $to){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Control $to
	 * @param \Avalonia\Rect& &$bounds
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TranslateBounds_2 ($control, $to, &$bounds){}
}
class ScrollContentPresenter extends \Avalonia\Controls\Presenters\ContentPresenter implements
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
	\Avalonia\Controls\Primitives\IScrollable,
	\Avalonia\Controls\IScrollAnchorProvider
{
	use ScrollContentPresenterOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $CanHorizontallyScrollProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $CanVerticallyScrollProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Presenters\ScrollContentPresenter,Avalonia\Size]
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
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Presenters\ScrollContentPresenter,Avalonia\Size]
	 */
	public static $ViewportProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 */
	public static $HorizontalSnapPointsTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 */
	public static $VerticalSnapPointsTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 */
	public static $HorizontalSnapPointsAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 */
	public static $VerticalSnapPointsAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsScrollChainingEnabledProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $CanHorizontallyScroll;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $CanVerticallyScroll;
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
	public $IsScrollChainingEnabled;
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
	 * @var \Avalonia\Media\BoxShadows
	 */
	public $BoxShadow;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Foreground;
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
	 * @var \Avalonia\Media\TextAlignment
	 */
	public $TextAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\TextWrapping
	 */
	public $TextWrapping;
	/**
	 * @property
	 * @var \Avalonia\Media\TextTrimming
	 */
	public $TextTrimming;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $MaxLines;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 * @since readonly
	 */
	public $Child;
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
	 * @var \Avalonia\Thickness
	 */
	public $Padding;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $RecognizesAccessKey;
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
	private function get_CurrentAnchor(){}
	/**
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Rect $targetRect
	 * @return \System\Boolean|bool
	 */
	public function BringDescendantIntoView($target, $targetRect){}
	/**
	 * @return \System\Void|void
	 */
	protected function AttachToScrollViewer(){}
	private function RegisterAnchorCandidate($element){}
	private function UnregisterAnchorCandidate($element){}
	private function ArrangeWithAnchoring($finalSize){}
	private function ComputeExtent($viewportSize){}
	private function OnScrollGesture($sender, $e){}
	private function OnScrollGestureEnded($sender, $e){}
	private function OnScrollGestureInertiaStartingEnded($sender, $e){}
	private function ScrollSnapPointsInfoSnapPointsChanged($sender, $e){}
	private function BringIntoViewRequested($sender, $e){}
	private function ChildChanged($e){}
	private function UpdateScrollableSubscription($child){}
	private function ScrollInvalidated($sender, $e){}
	private function UpdateFromScrollable($scrollable){}
	private function EnsureAnchorElementSelection(){}
	private function GetViewportBounds($element, &$bounds){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ScrollContentPresenterOverride::TranslateBounds_1 <br>private , args: ($control, $to)<br>
	 * @uses ScrollContentPresenterOverride::TranslateBounds_2 <br>private , args: ($control, $to, &$bounds)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TranslateBounds (\override ...$args){}
	private function UpdateSnapPoints(){}
	private function SnapOffset($offset){}
	private static function FindNearestSnapPoint($snapPoints, $value, &$lowerSnapPoint){}
	private function GetScrollSnapPointsInfo($content){}
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
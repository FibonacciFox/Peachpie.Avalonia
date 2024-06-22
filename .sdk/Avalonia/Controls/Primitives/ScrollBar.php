<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ScrollBarOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $v
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function ExtractOrdinate_1 ($v){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $v
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function ExtractOrdinate_2 ($v){}
}
class ScrollBar extends \Avalonia\Controls\Primitives\RangeBase implements
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
	\Avalonia\Styling\ISetterValue
{
	use ScrollBarOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ViewportSizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\ScrollBarVisibility]
	 */
	public static $VisibilityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\Orientation]
	 */
	public static $OrientationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\ScrollBar,System\Boolean]
	 */
	public static $IsExpandedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $AllowAutoHideProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\TimeSpan]
	 */
	public static $HideDelayProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\TimeSpan]
	 */
	public static $ShowDelayProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $ViewportSize;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public $Visibility;
	/**
	 * @property
	 * @var \Avalonia\Layout\Orientation
	 */
	public $Orientation;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsExpanded;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowAutoHide;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $HideDelay;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $ShowDelay;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Minimum;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Maximum;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $SmallChange;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $LargeChange;
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
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Primitives\ScrollEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Scroll($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Primitives\ScrollEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Scroll($value){}
	private function UpdateIsVisible(){}
	/**
	 * @return \System\Void|void
	 */
	protected function AttachToScrollViewer(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ScrollBarOverride::ExtractOrdinate_1 <br>private , args: ($v)<br>
	 * @uses ScrollBarOverride::ExtractOrdinate_2 <br>private , args: ($v)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|mixed|\override
	 */
	#[MethodOverridePrivate]function ExtractOrdinate (\override ...$args){}
	private function InvokeAfterDelay($handler, $delay){}
	private function UpdateIsExpandedState(){}
	private function CollapseAfterDelay(){}
	private function ExpandAfterDelay(){}
	private function Collapse(){}
	private function Expand(){}
	private function LineUpClick($sender, $e){}
	private function LineDownClick($sender, $e){}
	private function PageUpClick($sender, $e){}
	private function PageDownClick($sender, $e){}
	private function SmallDecrement(){}
	private function SmallIncrement(){}
	private function LargeDecrement(){}
	private function LargeIncrement(){}
	private function OnThumbDragDelta($e){}
	private function OnThumbDragComplete($e){}
	/**
	 * @param \Avalonia\Controls\Primitives\ScrollEventType $scrollEventType
	 * @return \System\Void|void
	 */
	protected function OnScroll($scrollEventType){}
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
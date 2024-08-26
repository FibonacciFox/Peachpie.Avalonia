<?php
namespace Avalonia\Layout;
class Layoutable extends \Avalonia\Visual implements
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
	\Avalonia\INamed
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Layout\Layoutable,Avalonia\Size]
	 */
	public static $DesiredSizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $WidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $HeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MinWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaxWidthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MinHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaxHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Thickness]
	 */
	public static $MarginProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\HorizontalAlignment]
	 */
	public static $HorizontalAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\VerticalAlignment]
	 */
	public static $VerticalAlignmentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $UseLayoutRoundingProperty;
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
	 */
	public $DesiredSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsMeasureValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
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
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Layout\EffectiveViewportChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_EffectiveViewportChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Layout\EffectiveViewportChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_EffectiveViewportChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_LayoutUpdated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_LayoutUpdated($value){}
	/**
	 * @return \System\Void|void
	 */
	public function UpdateLayout(){}
	/**
	 * @return \System\Void|void
	 */
	public function ApplyTemplate(){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \System\Void|void
	 */
	public function Measure($availableSize){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function Arrange($rect){}
	/**
	 * @return \System\Void|void
	 */
	public function InvalidateMeasure(){}
	/**
	 * @return \System\Void|void
	 */
	public function InvalidateArrange(){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	protected function ChildDesiredSizeChanged($control){}
	/**
	 * @param \Avalonia\Layout\EffectiveViewportChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function RaiseEffectiveViewportChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsMeasure(...$properties){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsArrange(...$properties){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \Avalonia\Size
	 */
	protected function MeasureCore($availableSize){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \Avalonia\Size
	 */
	protected function MeasureOverride($availableSize){}
	/**
	 * @param \Avalonia\Rect $finalRect
	 * @return \System\Void|void
	 */
	protected function ArrangeCore($finalRect){}
	/**
	 * @param \Avalonia\Size $finalSize
	 * @return \Avalonia\Size
	 */
	protected function ArrangeOverride($finalSize){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnMeasureInvalidated(){}
	private function AncestorBecameVisible($layoutManager){}
	private function LayoutManagedLayoutUpdated($sender, $e){}
	private static function IsInvalidRect($rect){}
	private static function IsInvalidSize($size){}
	private static function NonNegative($size){}
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
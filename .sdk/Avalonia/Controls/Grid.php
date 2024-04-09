<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GridOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $cellsHead
	 * @param \Avalonia\Size $referenceSize
	 * @param \System\Boolean|bool $ignoreDesiredSizeU
	 * @param \System\Boolean|bool $forceInfinityV
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MeasureCellsGroup_1 ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $cellsHead
	 * @param \Avalonia\Size $referenceSize
	 * @param \System\Boolean|bool $ignoreDesiredSizeU
	 * @param \System\Boolean|bool $forceInfinityV
	 * @param \System\Boolean& &$hasDesiredSizeUChanged
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MeasureCellsGroup_2 ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV, &$hasDesiredSizeUChanged){}
}
class Grid extends \Avalonia\Controls\Panel implements
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
	\Avalonia\LogicalTree\IChildIndexProvider
{
	use GridOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ShowGridLinesProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $ColumnProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $RowProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $ColumnSpanProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $RowSpanProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsSharedSizeScopeProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ShowGridLines;
	/**
	 * @property
	 * @var \Avalonia\Controls\ColumnDefinitions
	 */
	public $ColumnDefinitions;
	/**
	 * @property
	 * @var \Avalonia\Controls\RowDefinitions
	 */
	public $RowDefinitions;
	/**
	 * @property
	 * @var \Avalonia\Controls\Controls
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsItemsHost;
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
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetColumn($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public static function GetColumn($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetRow($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public static function GetRow($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetColumnSpan($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public static function GetColumnSpan($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetRowSpan($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Int32|int
	 */
	public static function GetRowSpan($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsSharedSizeScope($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsSharedSizeScope($element){}
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	/**
	 * @param \System\Int32|int $columnIndex
	 * @return \System\Double|double
	 */
	protected function GetFinalColumnDefinitionWidth($columnIndex){}
	/**
	 * @param \System\Int32|int $rowIndex
	 * @return \System\Double|double
	 */
	protected function GetFinalRowDefinitionHeight($rowIndex){}
	private function ValidateCells(){}
	private function ValidateCellsCore(){}
	private function ValidateDefinitionsUStructure(){}
	private function ValidateDefinitionsVStructure(){}
	private function ValidateDefinitionsLayout($definitions, $treatStarAsAuto){}
	private function CacheMinSizes($cellsHead, $isRows){}
	private function ApplyCachedMinSizes($minSizes, $isRows){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses GridOverride::MeasureCellsGroup_1 <br>private , args: ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV)<br>
	 * @uses GridOverride::MeasureCellsGroup_2 <br>private , args: ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV, &$hasDesiredSizeUChanged)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function MeasureCellsGroup (\override ...$args){}
	private static function RegisterSpan($store, $start, $count, $u, $value){}
	private function MeasureCell($cell, $forceInfinityV){}
	private static function GetMeasureSizeForRange($definitions, $start, $count){}
	private static function GetLengthTypeForRange($definitions, $start, $count){}
	private function EnsureMinSizeInDefinitionRange($definitions, $start, $count, $requestedSize, $percentReferenceSize){}
	private function ResolveStar($definitions, $availableSize){}
	private function ResolveStarMaxDiscrepancy($definitions, $availableSize){}
	private static function CalculateDesiredSize($definitions){}
	private function SetFinalSize($definitions, $finalSize, $columns){}
	private function SetFinalSizeMaxDiscrepancy($definitions, $finalSize, $columns){}
	private static function Choose($minRatio, $maxRatio, $proportion){}
	private static function CompareRoundingErrors($x, $y){}
	private static function GetFinalSizeForRange($definitions, $start, $count){}
	private function SetValid(){}
	private function EnsureGridLinesRenderer(){}
	private function SetFlags($value, $flags){}
	private function CheckFlags($flags){}
	private static function OnShowGridLinesPropertyChanged($d, $e){}
	private static function OnCellAttachedPropertyChanged($d, $e){}
	private static function CompareNullRefs($x, $y, &$result){}
	private static function StarWeight($def, $scale){}
	private function add_ChildIndexChanged($value){}
	private function remove_ChildIndexChanged($value){}
	private function GetChildIndex($child){}
	private function TryGetTotalCount(&$count){}
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
<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GridMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MeasureCellsGroup_1($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MeasureCellsGroup_2($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV, $hasDesiredSizeUChanged){}
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
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_2(){}
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
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsSharedSizeScope($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Boolean
	 */
	public static function GetIsSharedSizeScope($element){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShowGridLines(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShowGridLines($value){}
	/**
	 * @return \Avalonia\Controls\ColumnDefinitions
	 */
	public  function get_ColumnDefinitions(){}
	/**
	 * @param \Avalonia\Controls\ColumnDefinitions $value
	 * @return \System\Void|void
	 */
	public  function set_ColumnDefinitions($value){}
	/**
	 * @return \Avalonia\Controls\RowDefinitions
	 */
	public  function get_RowDefinitions(){}
	/**
	 * @param \Avalonia\Controls\RowDefinitions $value
	 * @return \System\Void|void
	 */
	public  function set_RowDefinitions($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @param \System\Int32|int $columnIndex
	 * @return \System\Double|double
	 */
	protected  function GetFinalColumnDefinitionWidth($columnIndex){}
	/**
	 * @param \System\Int32|int $rowIndex
	 * @return \System\Double|double
	 */
	protected  function GetFinalRowDefinitionHeight($rowIndex){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_MeasureOverrideInProgress(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_MeasureOverrideInProgress($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ArrangeOverrideInProgress(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_ArrangeOverrideInProgress($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ColumnDefinitionsDirty(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_ColumnDefinitionsDirty($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_RowDefinitionsDirty(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_RowDefinitionsDirty($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateCells(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateCellsCore(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateDefinitionsUStructure(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateDefinitionsVStructure(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Boolean $treatStarAsAuto
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValidateDefinitionsLayout($definitions, $treatStarAsAuto){}
	/**
	 * @param \System\Int32|int $cellsHead
	 * @param \System\Boolean $isRows
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CacheMinSizes($cellsHead, $isRows){}
	/**
	 * @param \System\Double[] $minSizes
	 * @param \System\Boolean $isRows
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ApplyCachedMinSizes($minSizes, $isRows){}
	/**
	 * @uses GridMethodsOverride::MeasureCellsGroup_1 ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV)
	 * @uses GridMethodsOverride::MeasureCellsGroup_2 ($cellsHead, $referenceSize, $ignoreDesiredSizeU, $forceInfinityV, $hasDesiredSizeUChanged)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MeasureCellsGroup(mixed ...$args){}
	/**
	 * @param \System\Collections\Hashtable& $store
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @param \System\Boolean $u
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterSpan($store, $start, $count, $u, $value){}
	/**
	 * @param \System\Int32|int $cell
	 * @param \System\Boolean $forceInfinityV
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MeasureCell($cell, $forceInfinityV){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMeasureSizeForRange($definitions, $start, $count){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLengthTypeForRange($definitions, $start, $count){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @param \System\Double|double $requestedSize
	 * @param \System\Double|double $percentReferenceSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureMinSizeInDefinitionRange($definitions, $start, $count, $requestedSize, $percentReferenceSize){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Double|double $availableSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveStar($definitions, $availableSize){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Double|double $availableSize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveStarMaxDiscrepancy($definitions, $availableSize){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CalculateDesiredSize($definitions){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Double|double $finalSize
	 * @param \System\Boolean $columns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFinalSize($definitions, $finalSize, $columns){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Double|double $finalSize
	 * @param \System\Boolean $columns
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFinalSizeMaxDiscrepancy($definitions, $finalSize, $columns){}
	/**
	 * @param \System\Double|double $minRatio
	 * @param \System\Double|double $maxRatio
	 * @param \System\Double|double $proportion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Choose($minRatio, $maxRatio, $proportion){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $x
	 * @param \System\Collections\Generic\KeyValuePair_2 $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompareRoundingErrors($x, $y){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $definitions
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFinalSizeForRange($definitions, $start, $count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetValid(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureGridLinesRenderer(){}
	/**
	 * @param \System\Boolean $value
	 * @param \Avalonia\Controls\Flags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFlags($value, $flags){}
	/**
	 * @param \Avalonia\Controls\Flags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckFlags($flags){}
	/**
	 * @param \Avalonia\AvaloniaObject $d
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnShowGridLinesPropertyChanged($d, $e){}
	/**
	 * @param \Avalonia\AvaloniaObject $d
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnCellAttachedPropertyChanged($d, $e){}
	/**
	 * @param \System\Object|object $x
	 * @param \System\Object|object $y
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompareNullRefs($x, $y, $result){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DefinitionsU(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DefinitionsV(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_TempDefinitions(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DefinitionIndices(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_RoundingErrors(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PrivateCells(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_CellsStructureDirty(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CellsStructureDirty($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ListenToNotifications(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ListenToNotifications($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SizeToContentU(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_SizeToContentU($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SizeToContentV(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_SizeToContentV($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasStarCellsU(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasStarCellsU($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasStarCellsV(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasStarCellsV($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasGroup3CellsInAutoRows(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasGroup3CellsInAutoRows($value){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $def
	 * @param \System\Double|double $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StarWeight($def, $scale){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ChildIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ChildIndexChanged($value){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChildIndex($child){}
	/**
	 * @param \System\Int32& $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetTotalCount($count){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses GridMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses GridMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses GridMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::get_Classes_1 ()
	 * @uses GridMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::get_LogicalChildren_1 ()
	 * @uses GridMethodsOverride::get_LogicalChildren_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
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
	 * @uses GridMethodsOverride::SetParent_1 ($parent)
	 * @uses GridMethodsOverride::SetParent_2 ($parent)
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
	 * @uses GridMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses GridMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses GridMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::get_Item_1 ($property)
	 * @uses GridMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::set_Item_1 ($property, $value)
	 * @uses GridMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::ClearValue_1 ($property)
	 * @uses GridMethodsOverride::ClearValue_2 ($property)
	 * @uses GridMethodsOverride::ClearValue_3 ($property)
	 * @uses GridMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::GetValue_1 ($property)
	 * @uses GridMethodsOverride::GetValue_2 ($property)
	 * @uses GridMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses GridMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses GridMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses GridMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses GridMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses GridMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses GridMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses GridMethodsOverride::Bind_5 ($property, $source)
	 * @uses GridMethodsOverride::Bind_6 ($property, $source)
	 * @uses GridMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GridMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses GridMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses GridMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses GridMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

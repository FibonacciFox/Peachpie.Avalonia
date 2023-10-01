<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CalendarMethodsOverride
{
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
class Calendar extends \Avalonia\Controls\Primitives\TemplatedControl implements 
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
	/**
	 * @return \Avalonia\Controls\Primitives\CalendarDayButton
	 */
	protected  function get_FocusButton(){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarDayButton $value
	 * @return \System\Void|void
	 */
	protected  function set_FocusButton($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\CalendarButton
	 */
	protected  function get_FocusCalendarButton(){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarButton $value
	 * @return \System\Void|void
	 */
	protected  function set_FocusCalendarButton($value){}
	/**
	 * @return \Avalonia\Controls\Panel
	 */
	protected  function get_Root(){}
	/**
	 * @param \Avalonia\Controls\Panel $value
	 * @return \System\Void|void
	 */
	protected  function set_Root($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\CalendarItem
	 */
	protected  function get_MonthControl(){}
	/**
	 * @return \System\DayOfWeek
	 */
	public  function get_FirstDayOfWeek(){}
	/**
	 * @param \System\DayOfWeek $value
	 * @return \System\Void|void
	 */
	public  function set_FirstDayOfWeek($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnFirstDayOfWeekChanged($e){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidFirstDayOfWeek($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTodayHighlighted(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsTodayHighlighted($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnIsTodayHighlightedChanged($e){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_HeaderBackground(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_HeaderBackground($value){}
	/**
	 * @return \Avalonia\Controls\CalendarMode
	 */
	public  function get_DisplayMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayMode($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayModePropertyChanged($e){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidDisplayMode($mode){}
	/**
	 * @param \Avalonia\Controls\CalendarModeChangedEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayModeChanged($args){}
	/**
	 * @return \Avalonia\Controls\CalendarSelectionMode
	 */
	public  function get_SelectionMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarSelectionMode $value
	 * @return \System\Void|void
	 */
	public  function set_SelectionMode($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionModeChanged($e){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidSelectionMode($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_SelectedDate(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedDate($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectedDateChanged($e){}
	/**
	 * @return \Avalonia\Controls\Primitives\SelectedDatesCollection
	 */
	public  function get_SelectedDates(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SelectedDatesCollection $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_SelectedDates($value){}
	/**
	 * @param \Avalonia\Controls\SelectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSelectionChanged($e){}
	/**
	 * @param \Avalonia\Controls\SelectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnSelectedDatesCollectionChanged($e){}
	/**
	 * @return \System\Collections\ObjectModel\Collection_1
	 */
	protected  function get_RemovedItems(){}
	/**
	 * @param \System\Collections\ObjectModel\Collection_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_RemovedItems($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_LastSelectedDateInternal(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_LastSelectedDateInternal($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_LastSelectedDate(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_LastSelectedDate($value){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_SelectedMonth(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	protected  function set_SelectedMonth($value){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_SelectedYear(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	protected  function set_SelectedYear($value){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_DisplayDate(){}
	/**
	 * @param \System\DateTime $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayDate($value){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_DisplayDateInternal(){}
	/**
	 * @param \System\DateTime $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_DisplayDateInternal($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayDateChanged($e){}
	/**
	 * @param \Avalonia\Controls\Calendar $c
	 * @param \System\DateTime $addedDate
	 * @param \System\DateTime $removedDate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateDisplayDate($c, $addedDate, $removedDate){}
	/**
	 * @param \Avalonia\Controls\CalendarDateChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayDate($e){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_DisplayDateStart(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayDateStart($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayDateStartChanged($e){}
	/**
	 * @return \Avalonia\Controls\Primitives\CalendarBlackoutDatesCollection
	 */
	public  function get_BlackoutDates(){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarBlackoutDatesCollection $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_BlackoutDates($value){}
	/**
	 * @param \Avalonia\Controls\Calendar $cal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectedDateMin($cal){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_DisplayDateRangeStart(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_DisplayDateEnd(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayDateEnd($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDisplayDateEndChanged($e){}
	/**
	 * @param \Avalonia\Controls\Calendar $cal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectedDateMax($cal){}
	/**
	 * @return \System\DateTime
	 */
	protected  function get_DisplayDateRangeEnd(){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_HoverStart(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_HoverStart($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_HoverStartIndex(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_HoverStartIndex($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_HoverEndInternal(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_HoverEndInternal($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_HoverEnd(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_HoverEnd($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_HoverEndIndex(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_HoverEndIndex($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasFocusInternal(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_HasFocusInternal($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsMouseSelection(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsMouseSelection($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_CalendarDatePickerDisplayDateFlag(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_CalendarDatePickerDisplayDateFlag($value){}
	/**
	 * @param \System\DateTime $day
	 * @return \Avalonia\Controls\Primitives\CalendarDayButton
	 */
	protected  function FindDayButtonFromDay($day){}
	/**
	 * @param \System\Nullable_1 $selectedMonth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectedMonthChanged($selectedMonth){}
	/**
	 * @param \System\Nullable_1 $selectedYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectedYearChanged($selectedYear){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnHeaderClick(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ResetStates(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateMonths(){}
	/**
	 * @param \Avalonia\Controls\Calendar $cal
	 * @param \System\Nullable_1 $value
	 * @return \System\Boolean
	 */
	protected static function IsValidDateSelection($cal, $value){}
	/**
	 * @param \Avalonia\Controls\Calendar $cal
	 * @param \System\Nullable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidKeyboardSelection($cal, $value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function HighlightDays(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UnHighlightDays(){}
	/**
	 * @param \System\Int32& $startIndex
	 * @param \System\Int32& $endIndex
	 * @return \System\Void|void
	 */
	protected  function SortHoverIndexes($startIndex, $endIndex){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnPreviousClick(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnNextClick(){}
	/**
	 * @param \System\DateTime $selectedDate
	 * @return \System\Void|void
	 */
	protected  function OnDayClick($selectedDate){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnMonthClick(){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_SelectedDatesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_SelectedDatesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_DisplayDateChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_DisplayDateChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_DisplayModeChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_DisplayModeChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function add_DayButtonMouseUp($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function remove_DayButtonMouseUp($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSelection(){}
	/**
	 * @param \System\Boolean $shift
	 * @param \System\Nullable_1 $lastSelectedDate
	 * @param \System\Nullable_1 $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessSelection($shift, $lastSelectedDate, $index){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnDayButtonMouseUp($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function Calendar_KeyDown($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function ProcessCalendarKey($e){}
	/**
	 * @param \System\Boolean $ctrl
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessUpKey($ctrl, $shift){}
	/**
	 * @param \System\Boolean $ctrl
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessDownKey($ctrl, $shift){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessLeftKey($shift){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessRightKey($shift){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessEnterKey(){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessHomeKey($shift){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessEndKey($shift){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessPageDownKey($shift){}
	/**
	 * @param \System\Boolean $shift
	 * @return \System\Void|void
	 */
	protected  function ProcessPageUpKey($shift){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Calendar_KeyUp($e){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ProcessShiftKeyUp(){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnIsEnabledChanged($e){}
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
	 * @uses CalendarMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses CalendarMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses CalendarMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::get_Classes_1 ()
	 * @uses CalendarMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::get_LogicalChildren_1 ()
	 * @uses CalendarMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses CalendarMethodsOverride::SetParent_1 ($parent)
	 * @uses CalendarMethodsOverride::SetParent_2 ($parent)
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
	 * @uses CalendarMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses CalendarMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses CalendarMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::get_Item_1 ($property)
	 * @uses CalendarMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::set_Item_1 ($property, $value)
	 * @uses CalendarMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::ClearValue_1 ($property)
	 * @uses CalendarMethodsOverride::ClearValue_2 ($property)
	 * @uses CalendarMethodsOverride::ClearValue_3 ($property)
	 * @uses CalendarMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::GetValue_1 ($property)
	 * @uses CalendarMethodsOverride::GetValue_2 ($property)
	 * @uses CalendarMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses CalendarMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses CalendarMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses CalendarMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses CalendarMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses CalendarMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses CalendarMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses CalendarMethodsOverride::Bind_5 ($property, $source)
	 * @uses CalendarMethodsOverride::Bind_6 ($property, $source)
	 * @uses CalendarMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CalendarMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses CalendarMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses CalendarMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

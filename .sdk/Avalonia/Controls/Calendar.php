<?php
namespace Avalonia\Controls;
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
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\DayOfWeek]
	 */
	public static $FirstDayOfWeekProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsTodayHighlightedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $HeaderBackgroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\CalendarMode]
	 */
	public static $DisplayModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\CalendarSelectionMode]
	 */
	public static $SelectionModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[System\DateTime]]
	 */
	public static $SelectedDateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\DateTime]
	 */
	public static $DisplayDateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[System\DateTime]]
	 */
	public static $DisplayDateStartProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[System\DateTime]]
	 */
	public static $DisplayDateEndProperty;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const RowsPerMonth = '7';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const ColumnsPerMonth = '7';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const RowsPerYear = '3';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const ColumnsPerYear = '4';
	/**
	 * @property
	 * @var \System\DayOfWeek
	 */
	public $FirstDayOfWeek;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTodayHighlighted;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $HeaderBackground;
	/**
	 * @property
	 * @var \Avalonia\Controls\CalendarMode
	 */
	public $DisplayMode;
	/**
	 * @property
	 * @var \Avalonia\Controls\CalendarSelectionMode
	 */
	public $SelectionMode;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 */
	public $SelectedDate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\SelectedDatesCollection
	 */
	public $SelectedDates;
	/**
	 * @property
	 * @var \System\DateTime
	 */
	public $DisplayDate;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 */
	public $DisplayDateStart;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\CalendarBlackoutDatesCollection
	 */
	public $BlackoutDates;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 */
	public $DisplayDateEnd;
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
	private function OnFirstDayOfWeekChanged($e){}
	private static function IsValidFirstDayOfWeek($value){}
	private function OnIsTodayHighlightedChanged($e){}
	private function OnDisplayModePropertyChanged($e){}
	private static function IsValidDisplayMode($mode){}
	private function OnDisplayModeChanged($args){}
	private function OnSelectionModeChanged($e){}
	private static function IsValidSelectionMode($value){}
	private function OnSelectedDateChanged($e){}
	private static function IsSelectionChanged($e){}
	/**
	 * @param \Avalonia\Controls\SelectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnSelectedDatesCollectionChanged($e){}
	private function OnDisplayDateChanged($e){}
	private static function UpdateDisplayDate($c, $addedDate, $removedDate){}
	private function OnDisplayDate($e){}
	private function OnDisplayDateStartChanged($e){}
	private static function SelectedDateMin($cal){}
	private function OnDisplayDateEndChanged($e){}
	private static function SelectedDateMax($cal){}
	/**
	 * @param \System\DateTime $day
	 * @return \Avalonia\Controls\Primitives\CalendarDayButton
	 */
	protected function FindDayButtonFromDay($day){}
	private function OnSelectedMonthChanged($selectedMonth){}
	private function OnSelectedYearChanged($selectedYear){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnHeaderClick(){}
	/**
	 * @return \System\Void|void
	 */
	protected function ResetStates(){}
	/**
	 * @return \System\Void|void
	 */
	protected function UpdateMonths(){}
	/**
	 * @param \Avalonia\Controls\Calendar $cal
	 * @param \System\Nullable_1 $value [generic: System\DateTime]
	 * @return \System\Boolean|bool
	 */
	protected static function IsValidDateSelection($cal, $value){}
	private static function IsValidKeyboardSelection($cal, $value){}
	/**
	 * @return \System\Void|void
	 */
	protected function HighlightDays(){}
	/**
	 * @return \System\Void|void
	 */
	protected function UnHighlightDays(){}
	/**
	 * @param \System\Int32& &$startIndex
	 * @param \System\Int32& &$endIndex
	 * @return \System\Void|void
	 */
	protected function SortHoverIndexes(&$startIndex, &$endIndex){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnPreviousClick(){}
	/**
	 * @return \System\Void|void
	 */
	protected function OnNextClick(){}
	/**
	 * @param \System\DateTime $selectedDate
	 * @return \System\Void|void
	 */
	protected function OnDayClick($selectedDate){}
	private function OnMonthClick(){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_SelectedDatesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_SelectedDatesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\CalendarDateChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DisplayDateChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\CalendarDateChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DisplayDateChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\CalendarModeChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DisplayModeChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\CalendarModeChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DisplayModeChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerReleasedEventArgs]
	 * @return \System\Void|void
	 */
	protected function add_DayButtonMouseUp($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerReleasedEventArgs]
	 * @return \System\Void|void
	 */
	protected function remove_DayButtonMouseUp($value){}
	private function AddSelection(){}
	private function ProcessSelection($shift, $lastSelectedDate, $index){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDayButtonMouseUp($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function Calendar_KeyDown($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Boolean|bool
	 */
	protected function ProcessCalendarKey($e){}
	/**
	 * @param \System\Boolean|bool $ctrl
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessUpKey($ctrl, $shift){}
	/**
	 * @param \System\Boolean|bool $ctrl
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessDownKey($ctrl, $shift){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessLeftKey($shift){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessRightKey($shift){}
	private function ProcessEnterKey(){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessHomeKey($shift){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessEndKey($shift){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessPageDownKey($shift){}
	/**
	 * @param \System\Boolean|bool $shift
	 * @return \System\Void|void
	 */
	protected function ProcessPageUpKey($shift){}
	private function Calendar_KeyUp($e){}
	/**
	 * @return \System\Void|void
	 */
	protected function ProcessShiftKeyUp(){}
	private function OnIsEnabledChanged($e){}
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
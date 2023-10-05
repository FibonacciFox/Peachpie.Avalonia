<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CalendarItemMethodsOverride
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
class CalendarItem extends \Avalonia\Controls\Primitives\TemplatedControl implements 
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
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 * @field
	 */
	public readonly $HeaderBackgroundProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]]
	 * @field
	 */
	public readonly $DayTitleTemplateProperty;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $HeaderBackground;
	/**
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 * @property
	 */
	public $DayTitleTemplate;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Background;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $BorderBrush;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $BorderThickness;
	/**
	 * @var \Avalonia\CornerRadius
	 * @property
	 */
	public $CornerRadius;
	/**
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public $FontFamily;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $FontSize;
	/**
	 * @var \Avalonia\Media\FontStyle
	 * @property
	 */
	public $FontStyle;
	/**
	 * @var \Avalonia\Media\FontWeight
	 * @property
	 */
	public $FontWeight;
	/**
	 * @var \Avalonia\Media\FontStretch
	 * @property
	 */
	public $FontStretch;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Foreground;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $Padding;
	/**
	 * @var \Avalonia\Controls\Templates\IControlTemplate
	 * @property
	 */
	public $Template;
	/**
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 * @property
	 */
	public $FocusAdorner;
	/**
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @property
	 */
	public readonly $DataTemplates;
	/**
	 * @var \Avalonia\Controls\ContextMenu
	 * @property
	 */
	public $ContextMenu;
	/**
	 * @var \Avalonia\Controls\Primitives\FlyoutBase
	 * @property
	 */
	public $ContextFlyout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLoaded;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Tag;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Focusable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsEnabled;
	/**
	 * @var \Avalonia\Input\Cursor
	 * @property
	 */
	public $Cursor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsKeyboardFocusWithin;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFocused;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsHitTestVisible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsPointerOver;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsTabStop;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEffectivelyEnabled;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $TabIndex;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyBinding]
	 * @property
	 */
	public readonly $KeyBindings;
	/**
	 * @var \Avalonia\Input\GestureRecognizers\GestureRecognizerCollection
	 * @property
	 */
	public readonly $GestureRecognizers;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MinWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MinHeight;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxHeight;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public $Margin;
	/**
	 * @var \Avalonia\Layout\HorizontalAlignment
	 * @property
	 */
	public $HorizontalAlignment;
	/**
	 * @var \Avalonia\Layout\VerticalAlignment
	 * @property
	 */
	public $VerticalAlignment;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $DesiredSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMeasureValid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsArrangeValid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseLayoutRounding;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $Bounds;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ClipToBounds;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $Clip;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEffectivelyVisible;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsVisible;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $OpacityMask;
	/**
	 * @var \Avalonia\Media\IEffect
	 * @property
	 */
	public $Effect;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasMirrorTransform;
	/**
	 * @var \Avalonia\Media\ITransform
	 * @property
	 */
	public $RenderTransform;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $RenderTransformOrigin;
	/**
	 * @var \Avalonia\Media\FlowDirection
	 * @property
	 */
	public $FlowDirection;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ZIndex;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \Avalonia\Controls\Classes
	 * @property
	 */
	public readonly $Classes;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $DataContext;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInitialized;
	/**
	 * @var \Avalonia\Styling\Styles
	 * @property
	 */
	public readonly $Styles;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $StyleKey;
	/**
	 * @var \Avalonia\Controls\IResourceDictionary
	 * @property
	 */
	public $Resources;
	/**
	 * @var \Avalonia\AvaloniaObject
	 * @property
	 */
	public $TemplatedParent;
	/**
	 * @var \Avalonia\Styling\ControlTheme
	 * @property
	 */
	public $Theme;
	/**
	 * @var \Avalonia\StyledElement
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $ActualThemeVariant;
	/**
	 * @var \Avalonia\Animation\Transitions
	 * @property
	 */
	public $Transitions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Controls\Calendar
	 */
	protected  function get_Owner(){}
	/**
	 * @param \Avalonia\Controls\Calendar $value
	 * @return \System\Void|void
	 */
	protected  function set_Owner($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\CalendarDayButton
	 */
	protected  function get_CurrentButton(){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarDayButton $value
	 * @return \System\Void|void
	 */
	protected  function set_CurrentButton($value){}
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
	 * @return \Avalonia\Controls\ITemplate_1
	 */
	public  function get_DayTitleTemplate(){}
	/**
	 * @param \Avalonia\Controls\ITemplate_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DayTitleTemplate($value){}
	/**
	 * @return \Avalonia\Controls\Button
	 */
	protected  function get_HeaderButton(){}
	/**
	 * @param \Avalonia\Controls\Button $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HeaderButton($value){}
	/**
	 * @return \Avalonia\Controls\Button
	 */
	protected  function get_NextButton(){}
	/**
	 * @param \Avalonia\Controls\Button $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_NextButton($value){}
	/**
	 * @return \Avalonia\Controls\Button
	 */
	protected  function get_PreviousButton(){}
	/**
	 * @param \Avalonia\Controls\Button $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_PreviousButton($value){}
	/**
	 * @return \Avalonia\Controls\Grid
	 */
	protected  function get_MonthView(){}
	/**
	 * @param \Avalonia\Controls\Grid $value
	 * @return \System\Void|void
	 */
	protected  function set_MonthView($value){}
	/**
	 * @return \Avalonia\Controls\Grid
	 */
	protected  function get_YearView(){}
	/**
	 * @param \Avalonia\Controls\Grid $value
	 * @return \System\Void|void
	 */
	protected  function set_YearView($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateGrids(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDayTitles(){}
	/**
	 * @param \System\DateTime $firstOfMonth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PreviousMonthDays($firstOfMonth){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateMonthMode(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMonthModeHeaderButton(){}
	/**
	 * @param \System\DateTime $firstDayOfMonth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMonthModeNextButton($firstDayOfMonth){}
	/**
	 * @param \System\DateTime $firstDayOfMonth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMonthModePreviousButton($firstDayOfMonth){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarDayButton $childButton
	 * @param \System\DateTime $dateToAdd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetButtonState($childButton, $dateToAdd){}
	/**
	 * @param \System\DateTime $firstDayOfMonth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCalendarDayButtons($firstDayOfMonth){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateYearMode(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetYearModeHeaderButton(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetYearModePreviousButton(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetYearModeNextButton(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMonthButtonsForYearMode(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateDecadeMode(){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarButton $calendarButton
	 * @return \System\Void|void
	 */
	protected  function UpdateYearViewSelection($calendarButton){}
	/**
	 * @param \System\Int32|int $decade
	 * @param \System\Int32|int $decadeEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetYearButtons($decade, $decadeEnd){}
	/**
	 * @param \System\Int32|int $decade
	 * @param \System\Int32|int $decadeEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDecadeModeHeaderButton($decade, $decadeEnd){}
	/**
	 * @param \System\Int32|int $decadeEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDecadeModeNextButton($decadeEnd){}
	/**
	 * @param \System\Int32|int $decade
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetDecadeModePreviousButton($decade){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function HeaderButton_Click($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function PreviousButton_Click($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function NextButton_Click($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function Cell_MouseEntered($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function Cell_MouseLeftButtonDown($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Primitives\CalendarDayButton $b
	 * @param \System\DateTime $selectedDate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddSelection($b, $selectedDate){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function Cell_MouseLeftButtonUp($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Cell_Click($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Month_CalendarButtonMouseDown($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function Month_CalendarButtonMouseUp($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Month_MouseEntered($sender, $e){}
	/**
	 * @param \System\Boolean $isEnabled
	 * @return \System\Void|void
	 */
	protected  function UpdateDisabled($isEnabled){}
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
	 * @uses CalendarItemMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses CalendarItemMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses CalendarItemMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::get_Classes_1 ()
	 * @uses CalendarItemMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::get_LogicalChildren_1 ()
	 * @uses CalendarItemMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses CalendarItemMethodsOverride::SetParent_1 ($parent)
	 * @uses CalendarItemMethodsOverride::SetParent_2 ($parent)
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
	 * @uses CalendarItemMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses CalendarItemMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses CalendarItemMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::get_Item_1 ($property)
	 * @uses CalendarItemMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::set_Item_1 ($property, $value)
	 * @uses CalendarItemMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::ClearValue_1 ($property)
	 * @uses CalendarItemMethodsOverride::ClearValue_2 ($property)
	 * @uses CalendarItemMethodsOverride::ClearValue_3 ($property)
	 * @uses CalendarItemMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::GetValue_1 ($property)
	 * @uses CalendarItemMethodsOverride::GetValue_2 ($property)
	 * @uses CalendarItemMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses CalendarItemMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses CalendarItemMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses CalendarItemMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses CalendarItemMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses CalendarItemMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses CalendarItemMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses CalendarItemMethodsOverride::Bind_5 ($property, $source)
	 * @uses CalendarItemMethodsOverride::Bind_6 ($property, $source)
	 * @uses CalendarItemMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CalendarItemMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses CalendarItemMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses CalendarItemMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses CalendarItemMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MenuItemMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\IMenuElement
	 */
	#[MethodOverride] private  function get_Parent_1(){}
	/**
	 * @return \Avalonia\StyledElement
	 */
	#[MethodOverride] public  function get_Parent_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function MoveSelection_1($direction, $wrap){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_2($direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_3($from, $direction, $wrap, $rangeModifier){}
	/**
	 * @return \Avalonia\Controls\IMenuItem
	 */
	#[MethodOverride] private  function get_SelectedItem_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_SelectedItem_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_SelectedItem_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_SelectedItem_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RaiseClick_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RaiseClick_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CanExecuteChanged_1($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CanExecuteChanged_2($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function UpdateLayout_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UpdateLayout_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function RegisterContentPresenter_1($presenter){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function RegisterContentPresenter_2($presenter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PrepareItemContainer_1($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function PrepareItemContainer_2($container, $item, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ScrollIntoView_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UpdateSelection_1($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function UpdateSelection_2($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
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
class MenuItem extends \Avalonia\Controls\Primitives\HeaderedSelectingItemsControl implements 
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
	\Avalonia\LogicalTree\IChildIndexProvider,
	\Avalonia\Controls\Presenters\IContentPresenterHost,
	\Avalonia\Controls\IMenuItem,
	\Avalonia\Controls\IMenuElement,
	\Avalonia\Controls\ISelectable,
	\Avalonia\Input\ICommandSource,
	\Avalonia\Input\IClickableControl
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Windows\Input\ICommand]
	 * @field
	 */
	public readonly $CommandProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 * @field
	 */
	public readonly $HotKeyProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 * @field
	 */
	public readonly $CommandParameterProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 * @field
	 */
	public readonly $IconProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 * @field
	 */
	public readonly $InputGestureProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsSubMenuOpenProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $StaysOpenOnClickProperty;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @field
	 */
	public readonly $ClickEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @field
	 */
	public readonly $PointerEnteredItemEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @field
	 */
	public readonly $PointerExitedItemEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 * @field
	 */
	public readonly $SubmenuOpenedEvent;
	/**
	 * @var \System\Windows\Input\ICommand
	 * @property
	 */
	public $Command;
	/**
	 * @var \Avalonia\Input\KeyGesture
	 * @property
	 */
	public $HotKey;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $CommandParameter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Icon;
	/**
	 * @var \Avalonia\Input\KeyGesture
	 * @property
	 */
	public $InputGesture;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsSelected;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsSubMenuOpen;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $StaysOpenOnClick;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasSubMenu;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTopLevel;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Header;
	/**
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 * @property
	 */
	public $HeaderTemplate;
	/**
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @property
	 */
	public readonly $HeaderPresenter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AutoScrollToSelectedItem;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $SelectedIndex;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $SelectedItem;
	/**
	 * @var \Avalonia\Data\IBinding
	 * @property
	 */
	public $SelectedValueBinding;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $SelectedValue;
	/**
	 * @var \System\Collections\IList
	 * @property
	 */
	protected $SelectedItems;
	/**
	 * @var \Avalonia\Controls\Selection\ISelectionModel
	 * @property
	 */
	protected $Selection;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsTextSearchEnabled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $WrapSelection;
	/**
	 * @var \Avalonia\Controls\SelectionMode
	 * @property
	 */
	protected $SelectionMode;
	/**
	 * @var \Avalonia\Data\IBinding
	 * @property
	 */
	public $DisplayMemberBinding;
	/**
	 * @var \Avalonia\Controls\Generators\ItemContainerGenerator
	 * @property
	 */
	public readonly $ItemContainerGenerator;
	/**
	 * @var \Avalonia\Controls\ItemCollection
	 * @property
	 */
	public readonly $Items;
	/**
	 * @var \Avalonia\Styling\ControlTheme
	 * @property
	 */
	public $ItemContainerTheme;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ItemCount;
	/**
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Panel]
	 * @property
	 */
	public $ItemsPanel;
	/**
	 * @var \System\Collections\IEnumerable
	 * @property
	 */
	public $ItemsSource;
	/**
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 * @property
	 */
	public $ItemTemplate;
	/**
	 * @var \Avalonia\Controls\Presenters\ItemsPresenter
	 * @property
	 */
	public readonly $Presenter;
	/**
	 * @var \Avalonia\Controls\Panel
	 * @property
	 */
	public readonly $ItemsPanelRoot;
	/**
	 * @var \Avalonia\Controls\ItemsSourceView
	 * @property
	 */
	public readonly $ItemsView;
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
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Click($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Click($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_PointerEnteredItem($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_PointerEnteredItem($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_PointerExitedItem($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_PointerExitedItem($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_SubmenuOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_SubmenuOpened($value){}
	/**
	 * @return \System\Windows\Input\ICommand
	 */
	public  function get_Command(){}
	/**
	 * @param \System\Windows\Input\ICommand $value
	 * @return \System\Void|void
	 */
	public  function set_Command($value){}
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public  function get_HotKey(){}
	/**
	 * @param \Avalonia\Input\KeyGesture $value
	 * @return \System\Void|void
	 */
	public  function set_HotKey($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_CommandParameter(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_CommandParameter($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Icon(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Icon($value){}
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public  function get_InputGesture(){}
	/**
	 * @param \Avalonia\Input\KeyGesture $value
	 * @return \System\Void|void
	 */
	public  function set_InputGesture($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSelected(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsSelected($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSubMenuOpen(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsSubMenuOpen($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_StaysOpenOnClick(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_StaysOpenOnClick($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasSubMenu(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTopLevel(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsPointerOverSubMenu(){}
	/**
	 * @uses MenuItemMethodsOverride::get_Parent_1 ()
	 * @uses MenuItemMethodsOverride::get_Parent_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Parent(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::MoveSelection_1 ($direction, $wrap)
	 * @uses MenuItemMethodsOverride::MoveSelection_2 ($direction, $wrap, $rangeModifier)
	 * @uses MenuItemMethodsOverride::MoveSelection_3 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::get_SelectedItem_1 ()
	 * @uses MenuItemMethodsOverride::get_SelectedItem_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItem(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::set_SelectedItem_1 ($value)
	 * @uses MenuItemMethodsOverride::set_SelectedItem_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItem(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SubItems(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Open(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses MenuItemMethodsOverride::RaiseClick_1 ()
	 * @uses MenuItemMethodsOverride::RaiseClick_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaiseClick(mixed ...$args){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnClick($e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnSubmenuOpened($e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseSubmenus(){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CommandChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CommandParameterChanged($e){}
	/**
	 * @uses MenuItemMethodsOverride::CanExecuteChanged_1 ($sender, $e)
	 * @uses MenuItemMethodsOverride::CanExecuteChanged_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanExecuteChanged(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryUpdateCanExecute(){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IconChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsSelectedChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubMenuOpenChanged($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupOpened($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupClosed($sender, $e){}
	/**
	 * @uses MenuItemMethodsOverride::UpdateLayout_1 ()
	 * @uses MenuItemMethodsOverride::UpdateLayout_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UpdateLayout(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::get_LogicalChildren_1 ()
	 * @uses MenuItemMethodsOverride::get_LogicalChildren_2 ()
	 * @uses MenuItemMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses MenuItemMethodsOverride::RegisterContentPresenter_2 ($presenter)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RegisterContentPresenter(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::PrepareItemContainer_1 ($parent)
	 * @uses MenuItemMethodsOverride::PrepareItemContainer_2 ($container, $item, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PrepareItemContainer(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses MenuItemMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses MenuItemMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UpdateSelection(mixed ...$args){}
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
	 * @uses MenuItemMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses MenuItemMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses MenuItemMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::get_Classes_1 ()
	 * @uses MenuItemMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
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
	 * @uses MenuItemMethodsOverride::SetParent_1 ($parent)
	 * @uses MenuItemMethodsOverride::SetParent_2 ($parent)
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
	 * @uses MenuItemMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses MenuItemMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses MenuItemMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::get_Item_1 ($property)
	 * @uses MenuItemMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::set_Item_1 ($property, $value)
	 * @uses MenuItemMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::ClearValue_1 ($property)
	 * @uses MenuItemMethodsOverride::ClearValue_2 ($property)
	 * @uses MenuItemMethodsOverride::ClearValue_3 ($property)
	 * @uses MenuItemMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::GetValue_1 ($property)
	 * @uses MenuItemMethodsOverride::GetValue_2 ($property)
	 * @uses MenuItemMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses MenuItemMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses MenuItemMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses MenuItemMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses MenuItemMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses MenuItemMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses MenuItemMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses MenuItemMethodsOverride::Bind_5 ($property, $source)
	 * @uses MenuItemMethodsOverride::Bind_6 ($property, $source)
	 * @uses MenuItemMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses MenuItemMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses MenuItemMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuItemMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses MenuItemMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

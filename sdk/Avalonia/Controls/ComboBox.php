<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ComboBoxMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MoveSelection_1($startIndex, $step, $wrap){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_2($direction, $wrap, $rangeModifier){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function MoveSelection_3($from, $direction, $wrap, $rangeModifier){}
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
class ComboBox extends \Avalonia\Controls\Primitives\SelectingItemsControl implements 
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
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsDropDownOpenProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $MaxDropDownHeightProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ComboBox,System\Object]
	 * @field
	 */
	public readonly $SelectionBoxItemProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\String]
	 * @field
	 */
	public readonly $PlaceholderTextProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 * @field
	 */
	public readonly $PlaceholderForegroundProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\HorizontalAlignment]
	 * @field
	 */
	public readonly $HorizontalContentAlignmentProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Layout\VerticalAlignment]
	 * @field
	 */
	public readonly $VerticalContentAlignmentProperty;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $pcDropdownOpen;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $pcPressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDropDownOpen;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxDropDownHeight;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $SelectionBoxItem;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PlaceholderText;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $PlaceholderForeground;
	/**
	 * @var \Avalonia\Layout\HorizontalAlignment
	 * @property
	 */
	public $HorizontalContentAlignment;
	/**
	 * @var \Avalonia\Layout\VerticalAlignment
	 * @property
	 */
	public $VerticalContentAlignment;
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_DropDownClosed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_DropDownClosed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_DropDownOpened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_DropDownOpened($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDropDownOpen(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsDropDownOpen($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxDropDownHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxDropDownHeight($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SelectionBoxItem(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function set_SelectionBoxItem($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PlaceholderText(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PlaceholderText($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_PlaceholderForeground(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_PlaceholderForeground($value){}
	/**
	 * @return \Avalonia\Layout\HorizontalAlignment
	 */
	public  function get_HorizontalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\HorizontalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalContentAlignment($value){}
	/**
	 * @return \Avalonia\Layout\VerticalAlignment
	 */
	public  function get_VerticalContentAlignment(){}
	/**
	 * @param \Avalonia\Layout\VerticalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalContentAlignment($value){}
	/**
	 * @param \Avalonia\Controls\ComboBoxItem $dropDownItem
	 * @return \System\Void|void
	 */
	protected  function ItemFocused($dropDownItem){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupClosed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupOpened($sender, $e){}
	/**
	 * @param \System\Boolean $isVisible
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsVisibleChanged($isVisible){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryFocusSelectedItem(){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanFocus($control){}
	/**
	 * @param \System\Object|object $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateSelectionBoxItem($item){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateFlowDirection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectFocusedItem(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectNext(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SelectPrevious(){}
	/**
	 * @uses ComboBoxMethodsOverride::MoveSelection_1 ($startIndex, $step, $wrap)
	 * @uses ComboBoxMethodsOverride::MoveSelection_2 ($direction, $wrap, $rangeModifier)
	 * @uses ComboBoxMethodsOverride::MoveSelection_3 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses ComboBoxMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses ComboBoxMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses ComboBoxMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
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
	 * @uses ComboBoxMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ComboBoxMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ComboBoxMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::get_Classes_1 ()
	 * @uses ComboBoxMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ComboBoxMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses ComboBoxMethodsOverride::SetParent_1 ($parent)
	 * @uses ComboBoxMethodsOverride::SetParent_2 ($parent)
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
	 * @uses ComboBoxMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ComboBoxMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ComboBoxMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::get_Item_1 ($property)
	 * @uses ComboBoxMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ComboBoxMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::ClearValue_1 ($property)
	 * @uses ComboBoxMethodsOverride::ClearValue_2 ($property)
	 * @uses ComboBoxMethodsOverride::ClearValue_3 ($property)
	 * @uses ComboBoxMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::GetValue_1 ($property)
	 * @uses ComboBoxMethodsOverride::GetValue_2 ($property)
	 * @uses ComboBoxMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ComboBoxMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ComboBoxMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ComboBoxMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ComboBoxMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ComboBoxMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ComboBoxMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ComboBoxMethodsOverride::Bind_5 ($property, $source)
	 * @uses ComboBoxMethodsOverride::Bind_6 ($property, $source)
	 * @uses ComboBoxMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ComboBoxMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ComboBoxMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ComboBoxMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ComboBoxMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

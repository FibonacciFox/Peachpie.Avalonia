<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ContextMenuMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Open_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Open_2($control){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Open_3($control, $placementTarget, $requestedByPointer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Initialize_1($setter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Initialize_2($setter){}
	/**
	 * @return \Avalonia\Controls\Platform\IMenuInteractionHandler
	 */
	#[MethodOverride] private  function get_InteractionHandler_1(){}
	/**
	 * @return \Avalonia\Controls\Platform\IMenuInteractionHandler
	 */
	#[MethodOverride] protected  function get_InteractionHandler_2(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	#[MethodOverride] private  function get_VisualRoot_1(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	#[MethodOverride] protected  function get_VisualRoot_2(){}
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
class ContextMenu extends \Avalonia\Controls\MenuBase implements 
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
	\Avalonia\Input\IFocusScope,
	\Avalonia\Controls\IMenu,
	\Avalonia\Controls\IMenuElement,
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $HorizontalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $VerticalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor]
	 * @field
	 */
	public readonly $PlacementAnchorProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment]
	 * @field
	 */
	public readonly $PlacementConstraintAdjustmentProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupGravity]
	 * @field
	 */
	public readonly $PlacementGravityProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 * @field
	 */
	public readonly $PlacementProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 * @field
	 */
	public readonly $PlacementModeProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Nullable_1[Avalonia\Rect]]
	 * @field
	 */
	public readonly $PlacementRectProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $WindowManagerAddShadowHintProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $PlacementTargetProperty;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $HorizontalOffset;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $VerticalOffset;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 * @property
	 */
	public $PlacementAnchor;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 * @property
	 */
	public $PlacementConstraintAdjustment;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 * @property
	 */
	public $PlacementGravity;
	/**
	 * @var \Avalonia\Controls\PlacementMode
	 * @property
	 */
	public $PlacementMode;
	/**
	 * @var \Avalonia\Controls\PlacementMode
	 * @property
	 */
	public $Placement;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $WindowManagerAddShadowHint;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public $PlacementRect;
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public $PlacementTarget;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsOpen;
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
	 * @return \System\Double|double
	 */
	public  function get_HorizontalOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalOffset($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_VerticalOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalOffset($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public  function get_PlacementAnchor(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementAnchor($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 */
	public  function get_PlacementConstraintAdjustment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementConstraintAdjustment($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public  function get_PlacementGravity(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementGravity($value){}
	/**
	 * @return \Avalonia\Controls\PlacementMode
	 */
	public  function get_PlacementMode(){}
	/**
	 * @param \Avalonia\Controls\PlacementMode $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementMode($value){}
	/**
	 * @return \Avalonia\Controls\PlacementMode
	 */
	public  function get_Placement(){}
	/**
	 * @param \Avalonia\Controls\PlacementMode $value
	 * @return \System\Void|void
	 */
	public  function set_Placement($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_WindowManagerAddShadowHint(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_WindowManagerAddShadowHint($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_PlacementRect(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementRect($value){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_PlacementTarget(){}
	/**
	 * @param \Avalonia\Controls\Control $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementTarget($value){}
	/**
	 * @param \System\ComponentModel\CancelEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Opening($value){}
	/**
	 * @param \System\ComponentModel\CancelEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Opening($value){}
	/**
	 * @param \System\ComponentModel\CancelEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Closing($value){}
	/**
	 * @param \System\ComponentModel\CancelEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Closing($value){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ContextMenuChanged($e){}
	/**
	 * @uses ContextMenuMethodsOverride::Open_1 ()
	 * @uses ContextMenuMethodsOverride::Open_2 ($control)
	 * @uses ContextMenuMethodsOverride::Open_3 ($control, $placementTarget, $requestedByPointer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Open(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::Initialize_1 ($setter)
	 * @uses ContextMenuMethodsOverride::Initialize_2 ($setter)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PopupHost(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_PopupHostChanged($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_PopupHostChanged($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupOpened($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\CancelEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupClosing($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupClosed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopupKeyUp($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ContextRequestedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ControlContextRequested($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ControlOnAttachedToVisualTree($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AttachControlToContextMenu($sender){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ControlDetachedFromVisualTree($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelClosing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelOpening(){}
	/**
	 * @uses ContextMenuMethodsOverride::get_InteractionHandler_1 ()
	 * @uses ContextMenuMethodsOverride::get_InteractionHandler_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_InteractionHandler(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::get_VisualRoot_1 ()
	 * @uses ContextMenuMethodsOverride::get_VisualRoot_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_VisualRoot(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::get_SelectedItem_1 ()
	 * @uses ContextMenuMethodsOverride::get_SelectedItem_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItem(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::set_SelectedItem_1 ($value)
	 * @uses ContextMenuMethodsOverride::set_SelectedItem_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItem(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SubItems(){}
	/**
	 * @uses ContextMenuMethodsOverride::MoveSelection_1 ($direction, $wrap)
	 * @uses ContextMenuMethodsOverride::MoveSelection_2 ($direction, $wrap, $rangeModifier)
	 * @uses ContextMenuMethodsOverride::MoveSelection_3 ($from, $direction, $wrap, $rangeModifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MoveSelection(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::ScrollIntoView_1 ($index)
	 * @uses ContextMenuMethodsOverride::ScrollIntoView_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScrollIntoView(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
	 * @uses ContextMenuMethodsOverride::UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses ContextMenuMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ContextMenuMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ContextMenuMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::get_Classes_1 ()
	 * @uses ContextMenuMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ContextMenuMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses ContextMenuMethodsOverride::SetParent_1 ($parent)
	 * @uses ContextMenuMethodsOverride::SetParent_2 ($parent)
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
	 * @uses ContextMenuMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ContextMenuMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ContextMenuMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::get_Item_1 ($property)
	 * @uses ContextMenuMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ContextMenuMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::ClearValue_1 ($property)
	 * @uses ContextMenuMethodsOverride::ClearValue_2 ($property)
	 * @uses ContextMenuMethodsOverride::ClearValue_3 ($property)
	 * @uses ContextMenuMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::GetValue_1 ($property)
	 * @uses ContextMenuMethodsOverride::GetValue_2 ($property)
	 * @uses ContextMenuMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ContextMenuMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ContextMenuMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ContextMenuMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ContextMenuMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ContextMenuMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ContextMenuMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ContextMenuMethodsOverride::Bind_5 ($property, $source)
	 * @uses ContextMenuMethodsOverride::Bind_6 ($property, $source)
	 * @uses ContextMenuMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ContextMenuMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ContextMenuMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ContextMenuMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ContextMenuMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

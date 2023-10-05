<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupMethodsOverride
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
class Popup extends \Avalonia\Controls\Control implements 
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
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $WindowManagerAddShadowHintProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $ChildProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $InheritsTransformProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsOpenProperty;
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
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $PlacementTargetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $OverlayDismissEventPassThroughProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\IInputElement]
	 * @field
	 */
	public readonly $OverlayInputPassThroughElementProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $HorizontalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsLightDismissEnabledProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $VerticalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $TopmostProperty;
	/**
	 * @var \Avalonia\Controls\Primitives\IPopupHost
	 * @property
	 */
	public readonly $Host;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $WindowManagerAddShadowHint;
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public $Child;
	/**
	 * @var \Avalonia\IAvaloniaDependencyResolver
	 * @property
	 */
	public $DependencyResolver;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $InheritsTransform;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsLightDismissEnabled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsOpen;
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
	public $OverlayDismissEventPassThrough;
	/**
	 * @var \Avalonia\Input\IInputElement
	 * @property
	 */
	public $OverlayInputPassThroughElement;
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
	 * @var \System\Boolean
	 * @property
	 */
	public $Topmost;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPointerOverPopup;
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
	public  function add_Closed($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Opened($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function remove_Closing($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\IPopupHost
	 */
	public  function get_Host(){}
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
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Child(){}
	/**
	 * @param \Avalonia\Controls\Control $value
	 * @return \System\Void|void
	 */
	public  function set_Child($value){}
	/**
	 * @return \Avalonia\IAvaloniaDependencyResolver
	 */
	public  function get_DependencyResolver(){}
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $value
	 * @return \System\Void|void
	 */
	public  function set_DependencyResolver($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InheritsTransform(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_InheritsTransform($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLightDismissEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsLightDismissEnabled($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOpen(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsOpen($value){}
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
	 * @return \System\Boolean
	 */
	public  function get_OverlayDismissEventPassThrough(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_OverlayDismissEventPassThrough($value){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	public  function get_OverlayInputPassThroughElement(){}
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 * @return \System\Void|void
	 */
	public  function set_OverlayInputPassThroughElement($value){}
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
	 * @return \System\Boolean
	 */
	public  function get_Topmost(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Topmost($value){}
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
	 * @return \System\Void|void
	 */
	public  function Open(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @param \Avalonia\Controls\Primitives\IPopupHost $popupHost
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateHostPosition($popupHost, $placementTarget){}
	/**
	 * @param \Avalonia\Controls\Primitives\IPopupHost $popupHost
	 * @param \Avalonia\Controls\TopLevel $topLevel
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateHostSizing($popupHost, $topLevel, $placementTarget){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandlePositionChange(){}
	/**
	 * @param \Avalonia\Controls\Primitives\T $target
	 * @param \Avalonia\Controls\Primitives\TEventHandler $handler
	 * @param \System\Action_2 $subscribe
	 * @param \System\Action_2 $unsubscribe
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SubscribeToEventHandler($target, $handler, $subscribe, $unsubscribe){}
	/**
	 * @param \Avalonia\Controls\Primitives\IPopupHost $host
	 * @param \System\Boolean $hint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WindowManagerAddShadowHintChanged($host, $hint){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsOpenChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChildChanged($e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CloseCore(){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ListenForNonClientClick($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PointerPressedDismissOverlay($sender, $e){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PassThroughEvent($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\Primitives\TemplateAppliedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RootTemplateApplied($sender, $e){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTemplatedParentAndApplyChildTemplates($control){}
	/**
	 * @param \Avalonia\Visual $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsChildOrThis($child){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Boolean
	 */
	public  function IsInsidePopup($visual){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPointerOverPopup(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WindowDeactivated($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParentClosed($sender, $e){}
	/**
	 * @param \Avalonia\Visual $v
	 * @param \System\Nullable_1 $matrix
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PlacementTargetTransformChanged($v, $matrix){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WindowLostFocus(){}
	/**
	 * @param \Avalonia\PixelPoint $pp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WindowPositionChanged($pp){}
	/**
	 * @param \System\Object|object $src
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PlacementTargetLayoutUpdated($src, $e){}
	/**
	 * @param \System\Object|object $src
	 * @param \Avalonia\Controls\PixelPointEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParentPopupPositionChanged($src, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BeginIgnoringIsOpen(){}
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
	 * @uses PopupMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses PopupMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses PopupMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::get_Classes_1 ()
	 * @uses PopupMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::get_LogicalChildren_1 ()
	 * @uses PopupMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses PopupMethodsOverride::SetParent_1 ($parent)
	 * @uses PopupMethodsOverride::SetParent_2 ($parent)
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
	 * @uses PopupMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses PopupMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses PopupMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::get_Item_1 ($property)
	 * @uses PopupMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::set_Item_1 ($property, $value)
	 * @uses PopupMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::ClearValue_1 ($property)
	 * @uses PopupMethodsOverride::ClearValue_2 ($property)
	 * @uses PopupMethodsOverride::ClearValue_3 ($property)
	 * @uses PopupMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::GetValue_1 ($property)
	 * @uses PopupMethodsOverride::GetValue_2 ($property)
	 * @uses PopupMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses PopupMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses PopupMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses PopupMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses PopupMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses PopupMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses PopupMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses PopupMethodsOverride::Bind_5 ($property, $source)
	 * @uses PopupMethodsOverride::Bind_6 ($property, $source)
	 * @uses PopupMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PopupMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses PopupMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses PopupMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

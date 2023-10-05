<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ScrollViewerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function RegisterContentPresenter_1($presenter){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function RegisterContentPresenter_2($presenter){}
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
class ScrollViewer extends \Avalonia\Controls\ContentControl implements 
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
	\Avalonia\Controls\IContentControl,
	\Avalonia\Controls\Presenters\IContentPresenterHost,
	\Avalonia\Controls\Primitives\IScrollable,
	\Avalonia\Controls\IScrollAnchorProvider
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $BringIntoViewOnFocusChangeProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 * @field
	 */
	public readonly $ExtentProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Vector]
	 * @field
	 */
	public readonly $OffsetProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 * @field
	 */
	public readonly $ViewportProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 * @field
	 */
	public readonly $LargeChangeProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Size]
	 * @field
	 */
	public readonly $SmallChangeProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,Avalonia\Vector]
	 * @field
	 */
	public readonly $ScrollBarMaximumProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\ScrollBarVisibility]
	 * @field
	 */
	public readonly $HorizontalScrollBarVisibilityProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 * @field
	 */
	public readonly $HorizontalSnapPointsTypeProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsType]
	 * @field
	 */
	public readonly $VerticalSnapPointsTypeProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 * @field
	 */
	public readonly $HorizontalSnapPointsAlignmentProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\SnapPointsAlignment]
	 * @field
	 */
	public readonly $VerticalSnapPointsAlignmentProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\ScrollBarVisibility]
	 * @field
	 */
	public readonly $VerticalScrollBarVisibilityProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ScrollViewer,System\Boolean]
	 * @field
	 */
	public readonly $IsExpandedProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $AllowAutoHideProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsScrollChainingEnabledProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsScrollInertiaEnabledProperty;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\ScrollChangedEventArgs]
	 * @field
	 */
	public readonly $ScrollChangedEvent;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $DefaultSmallChange;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $BringIntoViewOnFocusChange;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $Extent;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public $Offset;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $Viewport;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $LargeChange;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $SmallChange;
	/**
	 * @var \Avalonia\Controls\Primitives\ScrollBarVisibility
	 * @property
	 */
	public $HorizontalScrollBarVisibility;
	/**
	 * @var \Avalonia\Controls\Primitives\ScrollBarVisibility
	 * @property
	 */
	public $VerticalScrollBarVisibility;
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $CurrentAnchor;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $ScrollBarMaximum;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsExpanded;
	/**
	 * @var \Avalonia\Controls\Primitives\SnapPointsType
	 * @property
	 */
	public $HorizontalSnapPointsType;
	/**
	 * @var \Avalonia\Controls\Primitives\SnapPointsType
	 * @property
	 */
	public $VerticalSnapPointsType;
	/**
	 * @var \Avalonia\Controls\Primitives\SnapPointsAlignment
	 * @property
	 */
	public $HorizontalSnapPointsAlignment;
	/**
	 * @var \Avalonia\Controls\Primitives\SnapPointsAlignment
	 * @property
	 */
	public $VerticalSnapPointsAlignment;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowAutoHide;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsScrollChainingEnabled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsScrollInertiaEnabled;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Content;
	/**
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 * @property
	 */
	public $ContentTemplate;
	/**
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @property
	 */
	public readonly $Presenter;
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
	public  function add_ScrollChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ScrollChanged($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_BringIntoViewOnFocusChange(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_BringIntoViewOnFocusChange($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Extent(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	protected  function set_Extent($value){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Offset(){}
	/**
	 * @param \Avalonia\Vector $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Viewport(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	protected  function set_Viewport($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_LargeChange(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_SmallChange(){}
	/**
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public  function get_HorizontalScrollBarVisibility(){}
	/**
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalScrollBarVisibility($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public  function get_VerticalScrollBarVisibility(){}
	/**
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalScrollBarVisibility($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_CanHorizontallyScroll(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_CanVerticallyScroll(){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_CurrentAnchor(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_ScrollBarMaximum(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsExpanded(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsExpanded($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public  function get_HorizontalSnapPointsType(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalSnapPointsType($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public  function get_VerticalSnapPointsType(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalSnapPointsType($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public  function get_HorizontalSnapPointsAlignment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalSnapPointsAlignment($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public  function get_VerticalSnapPointsAlignment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalSnapPointsAlignment($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllowAutoHide(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllowAutoHide($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsScrollChainingEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsScrollChainingEnabled($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsScrollInertiaEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsScrollInertiaEnabled($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function LineUp(){}
	/**
	 * @return \System\Void|void
	 */
	public  function LineDown(){}
	/**
	 * @return \System\Void|void
	 */
	public  function LineLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public  function LineRight(){}
	/**
	 * @return \System\Void|void
	 */
	public  function PageUp(){}
	/**
	 * @return \System\Void|void
	 */
	public  function PageDown(){}
	/**
	 * @return \System\Void|void
	 */
	public  function PageLeft(){}
	/**
	 * @return \System\Void|void
	 */
	public  function PageRight(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ScrollToHome(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ScrollToEnd(){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean
	 */
	public static function GetBringIntoViewOnFocusChange($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetBringIntoViewOnFocusChange($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public static function GetHorizontalScrollBarVisibility($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalScrollBarVisibility($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public static function GetHorizontalSnapPointsType($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalSnapPointsType($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsType
	 */
	public static function GetVerticalSnapPointsType($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsType $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalSnapPointsType($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public static function GetHorizontalSnapPointsAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public static function SetHorizontalSnapPointsAlignment($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\SnapPointsAlignment
	 */
	public static function GetVerticalSnapPointsAlignment($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\SnapPointsAlignment $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalSnapPointsAlignment($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \Avalonia\Controls\Primitives\ScrollBarVisibility
	 */
	public static function GetVerticalScrollBarVisibility($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAllowAutoHide($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean
	 */
	public static function GetAllowAutoHide($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsScrollChainingEnabled($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean
	 */
	public static function GetIsScrollChainingEnabled($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \Avalonia\Controls\Primitives\ScrollBarVisibility $value
	 * @return \System\Void|void
	 */
	public static function SetVerticalScrollBarVisibility($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean
	 */
	public static function GetIsScrollInertiaEnabled($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsScrollInertiaEnabled($control, $value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public  function RegisterAnchorCandidate($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public  function UnregisterAnchorCandidate($element){}
	/**
	 * @uses ScrollViewerMethodsOverride::RegisterContentPresenter_1 ($presenter)
	 * @uses ScrollViewerMethodsOverride::RegisterContentPresenter_2 ($presenter)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RegisterContentPresenter(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \Avalonia\Vector $value
	 * @return \Avalonia\Vector
	 */
	protected static function CoerceOffset($sender, $value){}
	/**
	 * @param \System\Double|double $value
	 * @param \System\Double|double $min
	 * @param \System\Double|double $max
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Clamp($value, $min, $max){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Max($x, $y){}
	/**
	 * @param \Avalonia\Controls\Control $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChildChanged($child){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LogicalScrollInvalidated($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CalculatedPropertiesChanged(){}
	/**
	 * @param \Avalonia\Controls\ScrollChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnScrollChanged($e){}
	/**
	 * @param \Avalonia\Controls\Primitives\TemplateAppliedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToScrollBars($e){}
	/**
	 * @param \System\Boolean $isExpanded
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnScrollBarExpandedChanged($isExpanded){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnLayoutUpdated($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseScrollChanged(){}
	/**
	 * @uses ScrollViewerMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ScrollViewerMethodsOverride::get_LogicalChildren_2 ()
	 * @uses ScrollViewerMethodsOverride::get_LogicalChildren_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
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
	 * @uses ScrollViewerMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ScrollViewerMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ScrollViewerMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::get_Classes_1 ()
	 * @uses ScrollViewerMethodsOverride::get_Classes_2 ()
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
	 * @uses ScrollViewerMethodsOverride::SetParent_1 ($parent)
	 * @uses ScrollViewerMethodsOverride::SetParent_2 ($parent)
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
	 * @uses ScrollViewerMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ScrollViewerMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ScrollViewerMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::get_Item_1 ($property)
	 * @uses ScrollViewerMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ScrollViewerMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::ClearValue_1 ($property)
	 * @uses ScrollViewerMethodsOverride::ClearValue_2 ($property)
	 * @uses ScrollViewerMethodsOverride::ClearValue_3 ($property)
	 * @uses ScrollViewerMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::GetValue_1 ($property)
	 * @uses ScrollViewerMethodsOverride::GetValue_2 ($property)
	 * @uses ScrollViewerMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ScrollViewerMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ScrollViewerMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ScrollViewerMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ScrollViewerMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ScrollViewerMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ScrollViewerMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ScrollViewerMethodsOverride::Bind_5 ($property, $source)
	 * @uses ScrollViewerMethodsOverride::Bind_6 ($property, $source)
	 * @uses ScrollViewerMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ScrollViewerMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ScrollViewerMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ScrollViewerMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ScrollViewerMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ItemsControlMethodsOverride
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
class ItemsControl extends \Avalonia\Controls\Primitives\TemplatedControl implements 
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
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ControlTheme]
	 * @field
	 */
	public readonly $ItemContainerThemeProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ItemsControl,System\Int32]
	 * @field
	 */
	public readonly $ItemCountProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\ITemplate_1[Avalonia\Controls\Panel]]
	 * @field
	 */
	public readonly $ItemsPanelProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Collections\IEnumerable]
	 * @field
	 */
	public readonly $ItemsSourceProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Templates\IDataTemplate]
	 * @field
	 */
	public readonly $ItemTemplateProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Data\IBinding]
	 * @field
	 */
	public readonly $DisplayMemberBindingProperty;
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
	public $ItemCount;
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
	public $Presenter;
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
	 * @return \Avalonia\Data\IBinding
	 */
	public  function get_DisplayMemberBinding(){}
	/**
	 * @param \Avalonia\Data\IBinding $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayMemberBinding($value){}
	/**
	 * @return \Avalonia\Controls\Generators\ItemContainerGenerator
	 */
	public  function get_ItemContainerGenerator(){}
	/**
	 * @return \Avalonia\Controls\ItemCollection
	 */
	public  function get_Items(){}
	/**
	 * @return \Avalonia\Styling\ControlTheme
	 */
	public  function get_ItemContainerTheme(){}
	/**
	 * @param \Avalonia\Styling\ControlTheme $value
	 * @return \System\Void|void
	 */
	public  function set_ItemContainerTheme($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ItemCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ItemCount($value){}
	/**
	 * @return \Avalonia\Controls\ITemplate_1
	 */
	public  function get_ItemsPanel(){}
	/**
	 * @param \Avalonia\Controls\ITemplate_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ItemsPanel($value){}
	/**
	 * @return \System\Collections\IEnumerable
	 */
	public  function get_ItemsSource(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	public  function set_ItemsSource($value){}
	/**
	 * @return \Avalonia\Controls\Templates\IDataTemplate
	 */
	public  function get_ItemTemplate(){}
	/**
	 * @param \Avalonia\Controls\Templates\IDataTemplate $value
	 * @return \System\Void|void
	 */
	public  function set_ItemTemplate($value){}
	/**
	 * @return \Avalonia\Controls\Presenters\ItemsPresenter
	 */
	public  function get_Presenter(){}
	/**
	 * @param \Avalonia\Controls\Presenters\ItemsPresenter $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Presenter($value){}
	/**
	 * @return \Avalonia\Controls\Panel
	 */
	public  function get_ItemsPanelRoot(){}
	/**
	 * @return \Avalonia\Controls\ItemsSourceView
	 */
	public  function get_ItemsView(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_WrapFocus(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_WrapFocus($value){}
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
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ContainerPrepared($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ContainerPrepared($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ContainerIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ContainerIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ContainerClearing($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ContainerClearing($value){}
	/**
	 * @return \System\Object|object
	 */
	protected static function get_DefaultRecycleKey(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Controls\Control
	 */
	public  function ContainerFromIndex($index){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public  function ContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Int32|int
	 */
	public  function IndexFromContainer($container){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public  function ItemFromContainer($container){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetRealizedContainers(){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \Avalonia\Controls\ItemsControl
	 */
	public static function ItemsControlFromItemContaner($container){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $recycleKey
	 * @return \Avalonia\Controls\Control
	 */
	protected  function CreateContainerForItemOverride($item, $index, $recycleKey){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected  function PrepareContainerForItemOverride($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected  function ContainerForItemPreparedOverride($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	protected  function ContainerIndexChangedOverride($container, $oldIndex, $newIndex){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Void|void
	 */
	protected  function ClearContainerForItemOverride($container){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object& $recycleKey
	 * @return \System\Boolean
	 */
	protected  function NeedsContainerOverride($item, $index, $recycleKey){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Object& $recycleKey
	 * @return \System\Boolean
	 */
	protected  function NeedsContainer($item, $recycleKey){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RefreshContainers(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnItemsViewCollectionChanged($sender, $e){}
	/**
	 * @return \Avalonia\Controls\Generators\ItemContainerGenerator
	 */
	protected  function CreateItemContainerGenerator(){}
	/**
	 * @param \Avalonia\Controls\Control $c
	 * @return \System\Void|void
	 */
	protected  function AddLogicalChild($c){}
	/**
	 * @param \Avalonia\Controls\Control $c
	 * @return \System\Void|void
	 */
	protected  function RemoveLogicalChild($c){}
	/**
	 * @param \Avalonia\Controls\Presenters\ItemsPresenter $presenter
	 * @return \System\Void|void
	 */
	protected  function RegisterItemsPresenter($presenter){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected  function PrepareItemContainer($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected  function ItemContainerPrepared($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	protected  function ItemContainerIndexChanged($container, $oldIndex, $newIndex){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Void|void
	 */
	protected  function ClearItemContainer($container){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddControlItemsToLogicalChildren($items){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\Controls\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetIfUnset($target, $property, $value){}
	/**
	 * @param \System\Collections\IEnumerable $items
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveControlItemsFromLogicalChildren($items){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEffectiveItemTemplate(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdatePseudoClasses(){}
	/**
	 * @param \Avalonia\Input\INavigableContainer $container
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement $from
	 * @param \System\Boolean $wrap
	 * @return \Avalonia\Input\IInputElement
	 */
	protected static function GetNextControl($container, $direction, $from, $wrap){}
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
	 * @uses ItemsControlMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses ItemsControlMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses ItemsControlMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::get_Classes_1 ()
	 * @uses ItemsControlMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::get_LogicalChildren_1 ()
	 * @uses ItemsControlMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses ItemsControlMethodsOverride::SetParent_1 ($parent)
	 * @uses ItemsControlMethodsOverride::SetParent_2 ($parent)
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
	 * @uses ItemsControlMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ItemsControlMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ItemsControlMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::get_Item_1 ($property)
	 * @uses ItemsControlMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ItemsControlMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::ClearValue_1 ($property)
	 * @uses ItemsControlMethodsOverride::ClearValue_2 ($property)
	 * @uses ItemsControlMethodsOverride::ClearValue_3 ($property)
	 * @uses ItemsControlMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::GetValue_1 ($property)
	 * @uses ItemsControlMethodsOverride::GetValue_2 ($property)
	 * @uses ItemsControlMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ItemsControlMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ItemsControlMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ItemsControlMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ItemsControlMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ItemsControlMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ItemsControlMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ItemsControlMethodsOverride::Bind_5 ($property, $source)
	 * @uses ItemsControlMethodsOverride::Bind_6 ($property, $source)
	 * @uses ItemsControlMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ItemsControlMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ItemsControlMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ItemsControlMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ItemsControlMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

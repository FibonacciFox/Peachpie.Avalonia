<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ItemsControlOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ScrollIntoView_1 ($index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $item
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ScrollIntoView_2 ($item){}
}
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
	use ItemsControlOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ControlTheme]
	 */
	public static $ItemContainerThemeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\ItemsControl,System\Int32]
	 */
	public static $ItemCountProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\ITemplate_1[Avalonia\Controls\Panel]]
	 */
	public static $ItemsPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Collections\IEnumerable]
	 */
	public static $ItemsSourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Templates\IDataTemplate]
	 */
	public static $ItemTemplateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Data\IBinding]
	 */
	public static $DisplayMemberBindingProperty;
	/**
	 * @property
	 * @var \Avalonia\Data\IBinding
	 */
	public $DisplayMemberBinding;
	/**
	 * @property
	 * @var \Avalonia\Controls\Generators\ItemContainerGenerator
	 * @since readonly
	 */
	public $ItemContainerGenerator;
	/**
	 * @property
	 * @var \Avalonia\Controls\ItemCollection
	 * @since readonly
	 */
	public $Items;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $ItemContainerTheme;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ItemCount;
	/**
	 * @property
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Panel]
	 */
	public $ItemsPanel;
	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $ItemsSource;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $ItemTemplate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Presenters\ItemsPresenter
	 */
	public $Presenter;
	/**
	 * @property
	 * @var \Avalonia\Controls\Panel
	 * @since readonly
	 */
	public $ItemsPanelRoot;
	/**
	 * @property
	 * @var \Avalonia\Controls\ItemsSourceView
	 * @since readonly
	 */
	public $ItemsView;
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
	private function add_ChildIndexChanged($value){}
	private function remove_ChildIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerPreparedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ContainerPrepared($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerPreparedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ContainerPrepared($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerIndexChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ContainerIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerIndexChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ContainerIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerClearingEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ContainerClearing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ContainerClearingEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ContainerClearing($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Controls\Control
	 */
	public function ContainerFromIndex($index){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public function ContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Int32|int
	 */
	public function IndexFromContainer($container){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public function ItemFromContainer($container){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Controls\Control]
	 */
	public function GetRealizedContainers(){}
	/**
	 * @uses ItemsControlOverride::ScrollIntoView_1 <br>public , args: ($index)<br>
	 * @uses ItemsControlOverride::ScrollIntoView_2 <br>public , args: ($item)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ScrollIntoView (\override ...$args){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \Avalonia\Controls\ItemsControl
	 */
	public static function ItemsControlFromItemContaner($container){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \Avalonia\Controls\ItemsControl
	 */
	public static function ItemsControlFromItemContainer($container){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $recycleKey
	 * @return \Avalonia\Controls\Control
	 */
	protected function CreateContainerForItemOverride($item, $index, $recycleKey){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected function PrepareContainerForItemOverride($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected function ContainerForItemPreparedOverride($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	protected function ContainerIndexChangedOverride($container, $oldIndex, $newIndex){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Void|void
	 */
	protected function ClearContainerForItemOverride($container){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Object& &$recycleKey
	 * @return \System\Boolean|bool
	 */
	protected function NeedsContainerOverride($item, $index, &$recycleKey){}
	/**
	 * @param \System\Object|object $item
	 * @param \System\Object& &$recycleKey
	 * @return \System\Boolean|bool
	 */
	protected function NeedsContainer($item, &$recycleKey){}
	/**
	 * @return \System\Void|void
	 */
	protected function RefreshContainers(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnItemsViewCollectionChanged($sender, $e){}
	/**
	 * @return \Avalonia\Controls\Generators\ItemContainerGenerator
	 */
	protected function CreateItemContainerGenerator(){}
	/**
	 * @param \Avalonia\Controls\Control $c
	 * @return \System\Void|void
	 */
	protected function AddLogicalChild($c){}
	/**
	 * @param \Avalonia\Controls\Control $c
	 * @return \System\Void|void
	 */
	protected function RemoveLogicalChild($c){}
	/**
	 * @param \Avalonia\Controls\Presenters\ItemsPresenter $presenter
	 * @return \System\Void|void
	 */
	protected function RegisterItemsPresenter($presenter){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected function PrepareItemContainer($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	protected function ItemContainerPrepared($container, $item, $index){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	protected function ItemContainerIndexChanged($container, $oldIndex, $newIndex){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Void|void
	 */
	protected function ClearItemContainer($container){}
	private function AddControlItemsToLogicalChildren($items){}
	private function SetIfUnset($target, $property, $value){}
	private function RemoveControlItemsFromLogicalChildren($items){}
	private function GetEffectiveItemTemplate(){}
	/**
	 * @param \Avalonia\Input\INavigableContainer $container
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \Avalonia\Input\IInputElement $from
	 * @param \System\Boolean|bool $wrap
	 * @return \Avalonia\Input\IInputElement
	 */
	protected static function GetNextControl($container, $direction, $from, $wrap){}
	private function GetChildIndex($child){}
	private function TryGetTotalCount(&$count){}
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
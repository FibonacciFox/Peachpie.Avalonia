<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TreeViewOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\TreeView $treeView
	 * @param \Avalonia\Controls\TreeViewItem $nodeA
	 * @param \Avalonia\Controls\TreeViewItem $nodeB
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	#[MethodOverride]private static function FindFirstNode_1 ($treeView, $nodeA, $nodeB){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\TreeViewItem $node
	 * @param \Avalonia\Controls\TreeViewItem $nodeA
	 * @param \Avalonia\Controls\TreeViewItem $nodeB
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	#[MethodOverride]private static function FindFirstNode_2 ($node, $nodeA, $nodeB){}
}
class TreeView extends \Avalonia\Controls\ItemsControl implements
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
	\Avalonia\Input\ICustomKeyboardNavigation
{
	use TreeViewOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $AutoScrollToSelectedItemProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\TreeView,System\Object]
	 */
	public static $SelectedItemProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\TreeView,System\Collections\IList]
	 */
	public static $SelectedItemsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SelectionMode]
	 */
	public static $SelectionModeProperty;
	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\Generators\TreeItemContainerGenerator|\Avalonia\Controls\Generators\ItemContainerGenerator
	 */
	public $ItemContainerGenerator;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoScrollToSelectedItem;
	/**
	 * @property
	 * @var \Avalonia\Controls\SelectionMode
	 */
	public $SelectionMode;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \System\Collections\IList
	 */
	public $SelectedItems;
	/**
	 * @property
	 * @var \Avalonia\Data\IBinding
	 */
	public $DisplayMemberBinding;
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
	 * @since readonly
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
	 * @since readonly
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
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_SelectionChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\SelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_SelectionChanged($value){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $item
	 * @return \System\Void|void
	 */
	public function ExpandSubTree($item){}
	/**
	 * @param \Avalonia\Controls\TreeViewItem $item
	 * @return \System\Void|void
	 */
	public function CollapseSubTree($item){}
	/**
	 * @return \System\Void|void
	 */
	public function SelectAll(){}
	/**
	 * @return \System\Void|void
	 */
	public function UnselectAll(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Controls\Control]
	 */
	public function GetRealizedTreeContainers(){}
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Controls\Control
	 */
	public function TreeContainerFromItem($item){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @return \System\Object|object
	 */
	public function TreeItemFromContainer($container){}
	private function SubscribeToSelectedItems(){}
	private function SelectSingleItem($item){}
	private function SelectedItemsCollectionChanged($sender, $e){}
	private function MarkItemSelected($item, $selected){}
	private function SelectedItemsAdded($items){}
	private function UnsubscribeFromSelectedItems(){}
	private function GetNext($element, $direction){}
	private function GetContainerInDirection($from, $direction, $intoChildren){}
	/**
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Boolean|bool $select
	 * @param \System\Boolean|bool $rangeModifier
	 * @param \System\Boolean|bool $toggleModifier
	 * @param \System\Boolean|bool $rightButton
	 * @return \System\Void|void
	 */
	protected function UpdateSelectionFromContainer($container, $select, $rangeModifier, $toggleModifier, $rightButton){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TreeViewOverride::FindFirstNode_1 <br>private , args: ($treeView, $nodeA, $nodeB)<br>
	 * @uses TreeViewOverride::FindFirstNode_2 <br>private , args: ($node, $nodeA, $nodeB)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\TreeViewItem|mixed|\override
	 */
	#[MethodOverridePrivate]function FindFirstNode (\override ...$args){}
	private static function FindInContainers($itemsControl, $nodeA, $nodeB){}
	private function GetItemsInRange($from, $to){}
	/**
	 * @param \System\Object|object $eventSource
	 * @param \System\Boolean|bool $select
	 * @param \System\Boolean|bool $rangeModifier
	 * @param \System\Boolean|bool $toggleModifier
	 * @param \System\Boolean|bool $rightButton
	 * @return \System\Boolean|bool
	 */
	protected function UpdateSelectionFromEventSource($eventSource, $select, $rangeModifier, $toggleModifier, $rightButton){}
	/**
	 * @param \System\Object|object $eventSource
	 * @return \Avalonia\Controls\TreeViewItem
	 */
	protected function GetContainerFromEventSource($eventSource){}
	private function ContainerSelectionChanged($e){}
	private function MarkContainerSelected($container, $selected){}
	private static function SynchronizeItems($items, $desired){}
	private function add_ChildIndexChanged($value){}
	private function remove_ChildIndexChanged($value){}
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
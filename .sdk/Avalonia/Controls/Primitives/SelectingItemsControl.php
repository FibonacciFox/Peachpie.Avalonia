<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectingItemsControlOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean|bool $wrap
	 * @param \System\Boolean|bool $rangeModifier
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function MoveSelection_1 ($direction, $wrap, $rangeModifier){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $from
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean|bool $wrap
	 * @param \System\Boolean|bool $rangeModifier
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function MoveSelection_2 ($from, $direction, $wrap, $rangeModifier){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @param \System\Boolean|bool $select
	 * @param \System\Boolean|bool $rangeModifier
	 * @param \System\Boolean|bool $toggleModifier
	 * @param \System\Boolean|bool $rightButton
	 * @param \System\Boolean|bool $fromFocus
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function UpdateSelection_1 ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Control $container
	 * @param \System\Boolean|bool $select
	 * @param \System\Boolean|bool $rangeModifier
	 * @param \System\Boolean|bool $toggleModifier
	 * @param \System\Boolean|bool $rightButton
	 * @param \System\Boolean|bool $fromFocus
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function UpdateSelection_2 ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
}
class SelectingItemsControl extends \Avalonia\Controls\ItemsControl implements
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
	use SelectingItemsControlOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $AutoScrollToSelectedItemProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\SelectingItemsControl,System\Int32]
	 */
	public static $SelectedIndexProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\SelectingItemsControl,System\Object]
	 */
	public static $SelectedItemProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $SelectedValueProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Data\IBinding]
	 */
	public static $SelectedValueBindingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\SelectingItemsControl,System\Collections\IList]
	 */
	protected static $SelectedItemsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\SelectingItemsControl,Avalonia\Controls\Selection\ISelectionModel]
	 */
	protected static $SelectionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\SelectionMode]
	 */
	protected static $SelectionModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsSelectedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsTextSearchEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $IsSelectedChangedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\SelectionChangedEventArgs]
	 */
	public static $SelectionChangedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $WrapSelectionProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoScrollToSelectedItem;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $SelectedIndex;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \Avalonia\Data\IBinding
	 */
	public $SelectedValueBinding;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedValue;
	/**
	 * @property
	 * @var \System\Collections\IList
	 */
	protected $SelectedItems;
	/**
	 * @property
	 * @var \Avalonia\Controls\Selection\ISelectionModel
	 */
	protected $Selection;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTextSearchEnabled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $WrapSelection;
	/**
	 * @property
	 * @var \Avalonia\Controls\SelectionMode
	 */
	protected $SelectionMode;
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
	 * @property dublicate
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
	 * @param \Avalonia\Controls\Control $control
	 * @return \System\Boolean|bool
	 */
	public static function GetIsSelected($control){}
	/**
	 * @param \Avalonia\Controls\Control $control
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsSelected($control, $value){}
	/**
	 * @param \System\Object|object $eventSource
	 * @return \Avalonia\Controls\Control
	 */
	protected function GetContainerFromEventSource($eventSource){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetAnchorIndex(){}
	private function TryGetExistingSelection(){}
	/**
	 * @uses SelectingItemsControlOverride::MoveSelection_1 <br>protected , args: ($direction, $wrap, $rangeModifier)<br>
	 * @uses SelectingItemsControlOverride::MoveSelection_2 <br>protected , args: ($from, $direction, $wrap, $rangeModifier)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function MoveSelection (\override ...$args){}
	/**
	 * @uses SelectingItemsControlOverride::UpdateSelection_1 <br>protected , args: ($index, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)<br>
	 * @uses SelectingItemsControlOverride::UpdateSelection_2 <br>protected , args: ($container, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function UpdateSelection (\override ...$args){}
	/**
	 * @param \System\Object|object $eventSource
	 * @param \System\Boolean|bool $select
	 * @param \System\Boolean|bool $rangeModifier
	 * @param \System\Boolean|bool $toggleModifier
	 * @param \System\Boolean|bool $rightButton
	 * @param \System\Boolean|bool $fromFocus
	 * @return \System\Boolean|bool
	 */
	protected function UpdateSelectionFromEventSource($eventSource, $select, $rangeModifier, $toggleModifier, $rightButton, $fromFocus){}
	private function GetOrCreateSelectionModel(){}
	private function OnItemsViewSourceChanged($sender, $e){}
	private function OnSelectionModelPropertyChanged($sender, $e){}
	private function OnSelectionModelSelectionChanged($sender, $e){}
	private function OnSelectionModelLostSelection($sender, $e){}
	private function SelectItemWithValue($value){}
	private function FindItemWithValue($value){}
	private function UpdateSelectedValueFromItem(){}
	private function AutoScrollToSelectedItemIfNecessary($anchorIndex){}
	private function ContainerSelectionChanged($e){}
	private function MarkContainerSelected($container, $selected){}
	private function UpdateContainerSelection(){}
	private function CreateDefaultSelectionModel(){}
	private function InitializeSelectionModel($model){}
	private function DeinitializeSelectionModel($model){}
	private function BeginUpdating(){}
	private function EndUpdating(){}
	private function StartTextSearchTimer(){}
	private function StopTextSearchTimer(){}
	private function TextSearchTimer_Tick($sender, $e){}
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
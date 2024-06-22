<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MenuItemOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Controls\IMenuElement
	 */
	#[MethodOverride]private function get_Parent_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @param \System\Boolean|bool $wrap
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function MoveSelection_1 ($direction, $wrap){}
	/**
	 * @deprecated
	 * @return \Avalonia\Controls\IMenuItem
	 */
	#[MethodOverride]private function get_SelectedItem_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\IMenuItem $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_SelectedItem_1 ($value){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RaiseClick_1 (){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RaiseClick_2 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CanExecuteChanged_1 ($sender, $e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CanExecuteChanged_2 ($sender, $e){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function UpdateLayout_1 (){}
}
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
	use MenuItemOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Windows\Input\ICommand]
	 */
	public static $CommandProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 */
	public static $HotKeyProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $CommandParameterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $IconProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 */
	public static $InputGestureProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsSubMenuOpenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $StaysOpenOnClickProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $ClickEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $PointerEnteredItemEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $PointerExitedItemEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $SubmenuOpenedEvent;
	/**
	 * @property
	 * @var \System\Windows\Input\ICommand
	 */
	public $Command;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyGesture
	 */
	public $HotKey;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $CommandParameter;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Icon;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyGesture
	 */
	public $InputGesture;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsSelected;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsSubMenuOpen;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $StaysOpenOnClick;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasSubMenu;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTopLevel;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Header;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $HeaderTemplate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @since readonly
	 */
	public $HeaderPresenter;
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
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Click($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Click($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerEnteredItem($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerEnteredItem($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerExitedItem($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerExitedItem($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_SubmenuOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_SubmenuOpened($value){}
	private function get_IsPointerOverSubMenu(){}
	private function get_SubItems(){}
	/**
	 * @return \System\Void|void
	 */
	public function Open(){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MenuItemOverride::RaiseClick_1 <br>private , args: ()<br>
	 * @uses MenuItemOverride::RaiseClick_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function RaiseClick (){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnClick($e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnSubmenuOpened($e){}
	private function CloseSubmenus(){}
	private static function CommandChanged($e){}
	private static function CommandParameterChanged($e){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses MenuItemOverride::CanExecuteChanged_1 <br>private , args: ($sender, $e)<br>
	 * @uses MenuItemOverride::CanExecuteChanged_2 <br>private , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function CanExecuteChanged (\override ...$args){}
	private function TryUpdateCanExecute(){}
	private function IconChanged($e){}
	private function IsSelectedChanged($e){}
	private function SubMenuOpenChanged($e){}
	private function PopupOpened($sender, $e){}
	private function PopupClosed($sender, $e){}
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
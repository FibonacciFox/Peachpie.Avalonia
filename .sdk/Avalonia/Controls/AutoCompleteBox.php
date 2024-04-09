<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AutoCompleteBoxOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $clearDataContext
	 * @return \System\String|string
	 */
	#[MethodOverride]private function FormatValue_1 ($value, $clearDataContext){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	#[MethodOverride]protected function FormatValue_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function UpdateTextValue_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Nullable_1 $userInitiated [generic: System\Boolean]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function UpdateTextValue_2 ($value, $userInitiated){}
}
class AutoCompleteBox extends \Avalonia\Controls\Primitives\TemplatedControl implements
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
	\Avalonia\Styling\ISetterValue
{
	use AutoCompleteBoxOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\SelectionChangedEventArgs]
	 */
	public static $SelectionChangedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Controls\TextChangedEventArgs]
	 */
	public static $TextChangedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $WatermarkProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Int32]
	 */
	public static $MinimumPrefixLengthProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\TimeSpan]
	 */
	public static $MinimumPopulateDelayProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaxDropDownHeightProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsTextCompletionEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Templates\IDataTemplate]
	 */
	public static $ItemTemplateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsDropDownOpenProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $SelectedItemProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\String]
	 */
	public static $TextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\AutoCompleteBox,System\String]
	 */
	public static $SearchTextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\AutoCompleteFilterMode]
	 */
	public static $FilterModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\AutoCompleteFilterPredicate_1[System\Object]]
	 */
	public static $ItemFilterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\AutoCompleteFilterPredicate_1[System\String]]
	 */
	public static $TextFilterProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\AutoCompleteSelector_1[System\Object]]
	 */
	public static $ItemSelectorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\AutoCompleteSelector_1[System\String]]
	 */
	public static $TextSelectorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Collections\IEnumerable]
	 */
	public static $ItemsSourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Func_3[System\String,System\Threading\CancellationToken,System\Threading\Tasks\Task_1[System\Collections\Generic\IEnumerable_1[System\Object]]]]
	 */
	public static $AsyncPopulatorProperty;
	/**
	 * @property
	 * @var \Avalonia\Controls\Utils\ISelectionAdapter
	 */
	protected $SelectionAdapter;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $MinimumPrefixLength;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTextCompletionEnabled;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $ItemTemplate;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $MinimumPopulateDelay;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxDropDownHeight;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsDropDownOpen;
	/**
	 * @property
	 * @var \Avalonia\Data\IBinding
	 */
	public $ValueMemberBinding;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $SearchText;
	/**
	 * @property
	 * @var \Avalonia\Controls\AutoCompleteFilterMode
	 */
	public $FilterMode;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Watermark;
	/**
	 * @property
	 * @var \Avalonia\Controls\AutoCompleteFilterPredicate_1[System\Object]
	 */
	public $ItemFilter;
	/**
	 * @property
	 * @var \Avalonia\Controls\AutoCompleteFilterPredicate_1[System\String]
	 */
	public $TextFilter;
	/**
	 * @property
	 * @var \Avalonia\Controls\AutoCompleteSelector_1[System\Object]
	 */
	public $ItemSelector;
	/**
	 * @property
	 * @var \Avalonia\Controls\AutoCompleteSelector_1[System\String]
	 */
	public $TextSelector;
	/**
	 * @property
	 * @var \System\Func_3[System\String,System\Threading\CancellationToken,System\Threading\Tasks\Task_1[System\Collections\Generic\IEnumerable_1[System\Object]]]
	 */
	public $AsyncPopulator;
	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $ItemsSource;
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
	private static function IsValidMinimumPrefixLength($value){}
	private static function IsValidMinimumPopulateDelay($value){}
	private static function IsValidMaxDropDownHeight($value){}
	private static function IsValidFilterMode($mode){}
	private function OnControlIsEnabledChanged($e){}
	private function OnMinimumPopulateDelayChanged($e){}
	private function OnIsDropDownOpenChanged($e){}
	private function OnSelectedItemPropertyChanged($e){}
	private function OnTextPropertyChanged($e){}
	private function OnSearchTextPropertyChanged($e){}
	private function OnFilterModePropertyChanged($e){}
	private function OnItemFilterPropertyChanged($e){}
	private function OnItemsSourcePropertyChanged($e){}
	private function OnItemTemplatePropertyChanged($e){}
	private function OnValueMemberBindingChanged($value){}
	/**
	 * @param \Avalonia\Controls\INameScope $nameScope
	 * @return \Avalonia\Controls\Utils\ISelectionAdapter
	 */
	protected function GetSelectionAdapterPart($nameScope){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function HasFocus(){}
	private function FocusChanged($hasFocus){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\TextChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_TextChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\TextChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_TextChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\PopulatingEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Populating($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\PopulatingEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Populating($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\PopulatedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Populated($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\PopulatedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Populated($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DropDownOpening($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DropDownOpening($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_DropDownOpened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_DropDownOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DropDownClosing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DropDownClosing($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_DropDownClosed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_DropDownClosed($value){}
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
	 * @param \Avalonia\Controls\PopulatingEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPopulating($e){}
	/**
	 * @param \Avalonia\Controls\PopulatedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPopulated($e){}
	/**
	 * @param \Avalonia\Controls\SelectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnSelectionChanged($e){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDropDownOpening($e){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDropDownOpened($e){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDropDownClosing($e){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDropDownClosed($e){}
	/**
	 * @param \Avalonia\Controls\TextChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnTextChanged($e){}
	private function ClosingDropDown($oldValue){}
	private function OpeningDropDown($oldValue){}
	private function DropDownPopup_Closed($sender, $e){}
	private function PopulateDropDown($sender, $e){}
	private function TryPopulateAsync($searchText){}
	private function PopulateAsync($searchText, $cancellationToken){}
	private function OpenDropDown(){}
	private function CloseDropDown(){}
	/**
	 * @uses AutoCompleteBoxOverride::FormatValue_1 <br>private , args: ($value, $clearDataContext)<br>
	 * @uses AutoCompleteBoxOverride::FormatValue_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function FormatValue (\override ...$args){}
	private function OnTextBoxTextChanged(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses AutoCompleteBoxOverride::UpdateTextValue_1 <br>private , args: ($value)<br>
	 * @uses AutoCompleteBoxOverride::UpdateTextValue_2 <br>private , args: ($value, $userInitiated)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function UpdateTextValue (\override ...$args){}
	private function TextUpdated($newText, $userInitiated){}
	private function ClearView(){}
	private function RefreshView(){}
	private function OnItemsSourceChanged($newValue){}
	private function ItemsCollectionChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	public function PopulateComplete(){}
	private function UpdateTextCompletion($userInitiated){}
	private function TryGetMatch($searchText, $view, $predicate){}
	private function ClearTextBoxSelection(){}
	private function OnSelectedItemChanged($newItem){}
	private function OnAdapterSelectionChanged($sender, $e){}
	private function OnAdapterSelectionComplete($sender, $e){}
	private function OnAdapterSelectionCanceled($sender, $e){}
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
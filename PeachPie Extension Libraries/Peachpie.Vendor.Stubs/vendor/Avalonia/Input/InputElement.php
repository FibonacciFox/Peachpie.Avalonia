<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InputElementOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function UpdateIsEffectivelyEnabled_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\InputElement $parent
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function UpdateIsEffectivelyEnabled_2 ($parent){}
}
class InputElement extends \Avalonia\Interactivity\Interactive implements
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
	\Avalonia\Input\IInputElement
{
	use InputElementOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $FocusableProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\InputElement,System\Boolean]
	 */
	public static $IsEffectivelyEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\Cursor]
	 */
	public static $CursorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\InputElement,System\Boolean]
	 */
	public static $IsKeyboardFocusWithinProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\InputElement,System\Boolean]
	 */
	public static $IsFocusedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsHitTestVisibleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\InputElement,System\Boolean]
	 */
	public static $IsPointerOverProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsTabStopProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\GotFocusEventArgs]
	 */
	public static $GotFocusEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $LostFocusEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\KeyEventArgs]
	 */
	public static $KeyDownEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\KeyEventArgs]
	 */
	public static $KeyUpEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Int32]
	 */
	public static $TabIndexProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TextInputEventArgs]
	 */
	public static $TextInputEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TextInput\TextInputMethodClientRequestedEventArgs]
	 */
	public static $TextInputMethodClientRequestedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerEventArgs]
	 */
	public static $PointerEnteredEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerEventArgs]
	 */
	public static $PointerExitedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerEventArgs]
	 */
	public static $PointerMovedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerPressedEventArgs]
	 */
	public static $PointerPressedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerReleasedEventArgs]
	 */
	public static $PointerReleasedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerCaptureLostEventArgs]
	 */
	public static $PointerCaptureLostEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerWheelEventArgs]
	 */
	public static $PointerWheelChangedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 */
	public static $TappedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\HoldingRoutedEventArgs]
	 */
	public static $HoldingEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 */
	public static $DoubleTappedEvent;
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
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\GotFocusEventArgs]
	 * @return \System\Void|void
	 */
	public function add_GotFocus($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\GotFocusEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_GotFocus($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_LostFocus($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_LostFocus($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\KeyEventArgs]
	 * @return \System\Void|void
	 */
	public function add_KeyDown($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\KeyEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_KeyDown($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\KeyEventArgs]
	 * @return \System\Void|void
	 */
	public function add_KeyUp($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\KeyEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_KeyUp($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TextInputEventArgs]
	 * @return \System\Void|void
	 */
	public function add_TextInput($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TextInputEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_TextInput($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TextInput\TextInputMethodClientRequestedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_TextInputMethodClientRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TextInput\TextInputMethodClientRequestedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_TextInputMethodClientRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerEntered($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerEntered($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerExited($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerExited($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerMoved($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerMoved($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerPressedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerPressed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerPressedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerPressed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerReleasedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerReleased($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerReleasedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerReleased($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerCaptureLostEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerCaptureLost($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerCaptureLostEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerCaptureLost($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerWheelEventArgs]
	 * @return \System\Void|void
	 */
	public function add_PointerWheelChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\PointerWheelEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_PointerWheelChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TappedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Tapped($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TappedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Tapped($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\HoldingRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Holding($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\HoldingRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Holding($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TappedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DoubleTapped($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Input\TappedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DoubleTapped($value){}
	/**
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Boolean|bool
	 */
	public function Focus($method, $keyModifiers){}
	/**
	 * @param \Avalonia\Input\GotFocusEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnGotFocus($e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnLostFocus($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnKeyDown($e){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnKeyUp($e){}
	/**
	 * @param \Avalonia\Input\TextInputEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnTextInput($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerEntered($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerExited($e){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerMoved($e){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerPressed($e){}
	/**
	 * @param \Avalonia\Input\PointerReleasedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerReleased($e){}
	private function OnGesturePointerReleased($e){}
	private function OnGesturePointerCaptureLost($e){}
	private function OnGesturePointerPressed($e){}
	private function OnGesturePointerMoved($e){}
	/**
	 * @param \Avalonia\Input\PointerCaptureLostEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerCaptureLost($e){}
	/**
	 * @param \Avalonia\Input\PointerWheelEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPointerWheelChanged($e){}
	/**
	 * @uses InputElementOverride::UpdateIsEffectivelyEnabled_1 <br>protected , args: ()<br>
	 * @uses InputElementOverride::UpdateIsEffectivelyEnabled_2 <br>private , args: ($parent)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function UpdateIsEffectivelyEnabled (\override ...$args){}
	private static function IsEnabledChanged($e){}
	private function OnPointerEnteredCore($e){}
	private function OnPointerExitedCore($e){}
	private function UpdatePseudoClasses($isFocused, $isPointerOver){}
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
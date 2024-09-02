<?php
namespace Avalonia\Input;
class Gestures extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsHoldingEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsHoldWithMouseEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 */
	public static $TappedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 */
	public static $DoubleTappedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 */
	public static $RightTappedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureEventArgs]
	 */
	public static $ScrollGestureEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureInertiaStartingEventArgs]
	 */
	public static $ScrollGestureInertiaStartingEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureEndedEventArgs]
	 */
	public static $ScrollGestureEndedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 */
	public static $PointerTouchPadGestureMagnifyEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 */
	public static $PointerTouchPadGestureRotateEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 */
	public static $PointerTouchPadGestureSwipeEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PinchEventArgs]
	 */
	public static $PinchEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PinchEndedEventArgs]
	 */
	public static $PinchEndedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PullGestureEventArgs]
	 */
	public static $PullGestureEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\HoldingRoutedEventArgs]
	 */
	public static $HoldingEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PullGestureEndedEventArgs]
	 */
	public static $PullGestureEndedEvent;
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsHoldingEnabled($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsHoldingEnabled($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsHoldWithMouseEnabled($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsHoldWithMouseEnabled($element, $value){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddDoubleTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddRightTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\HoldingRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddHoldingHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PinchEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPinchHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PinchEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPinchEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PullGestureEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPullGestureHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PullGestureEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPullGestureEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPointerTouchPadGestureMagnifyHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPointerTouchPadGestureRotateHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddPointerTouchPadGestureSwipeHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddScrollGestureHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\ScrollGestureEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddScrollGestureEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\ScrollGestureInertiaStartingEventArgs]
	 * @return \System\Void|void
	 */
	public static function AddScrollGestureInertiaStartingHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveDoubleTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveRightTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveHoldingHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PinchEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePinchHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PinchEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePinchEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PullGestureEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePullGestureHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PullGestureEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePullGestureEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePointerTouchPadGestureMagnifyHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePointerTouchPadGestureRotateHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\PointerDeltaEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemovePointerTouchPadGestureSwipeHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\ScrollGestureEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveScrollGestureHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\ScrollGestureEndedEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveScrollGestureEndedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler [generic: Avalonia\Input\ScrollGestureInertiaStartingEventArgs]
	 * @return \System\Void|void
	 */
	public static function RemoveScrollGestureInertiaStartingHandler($element, $handler){}
	private static function PointerPressed($ev){}
	private static function PointerReleased($ev){}
	private static function PointerMoved($ev){}
}
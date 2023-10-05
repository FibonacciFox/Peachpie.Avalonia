<?php
namespace Avalonia\Input;
/**
 */
class Gestures extends \System\Object
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsHoldingEnabledProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsHoldWithMouseEnabledProperty;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 * @field
	 */
	public readonly $TappedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 * @field
	 */
	public readonly $DoubleTappedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\TappedEventArgs]
	 * @field
	 */
	public readonly $RightTappedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureEventArgs]
	 * @field
	 */
	public readonly $ScrollGestureEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureInertiaStartingEventArgs]
	 * @field
	 */
	public readonly $ScrollGestureInertiaStartingEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\ScrollGestureEndedEventArgs]
	 * @field
	 */
	public readonly $ScrollGestureEndedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 * @field
	 */
	public readonly $PointerTouchPadGestureMagnifyEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 * @field
	 */
	public readonly $PointerTouchPadGestureRotateEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PointerDeltaEventArgs]
	 * @field
	 */
	public readonly $PointerTouchPadGestureSwipeEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PinchEventArgs]
	 * @field
	 */
	public readonly $PinchEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PinchEndedEventArgs]
	 * @field
	 */
	public readonly $PinchEndedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PullGestureEventArgs]
	 * @field
	 */
	public readonly $PullGestureEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\HoldingRoutedEventArgs]
	 * @field
	 */
	public readonly $HoldingEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\PullGestureEndedEventArgs]
	 * @field
	 */
	public readonly $PullGestureEndedEvent;
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsHoldingEnabled($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsHoldingEnabled($element, $value){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsHoldWithMouseEnabled($element){}
	/**
	 * @param \Avalonia\StyledElement $element
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsHoldWithMouseEnabled($element, $value){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function AddTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function AddDoubleTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function AddRightTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function RemoveTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function RemoveDoubleTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $element
	 * @param \System\EventHandler_1 $handler
	 * @return \System\Void|void
	 */
	public static function RemoveRightTappedHandler($element, $handler){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointerPressed($ev){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointerReleased($ev){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointerMoved($ev){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

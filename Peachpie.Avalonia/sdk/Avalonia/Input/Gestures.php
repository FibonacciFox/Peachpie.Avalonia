<?php
namespace Avalonia\Input;
/**
 */
class Gestures extends \System\Object
{
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

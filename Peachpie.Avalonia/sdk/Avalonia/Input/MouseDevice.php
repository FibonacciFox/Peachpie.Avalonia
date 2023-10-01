<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MouseDeviceMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ProcessRawEvent_1($e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ProcessRawEvent_2($e){}
}
/**
 */
class MouseDevice extends \System\Object implements 
	\Avalonia\Input\IMouseDevice,
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	/**
	 * @uses MouseDeviceMethodsOverride::ProcessRawEvent_1 ($e)
	 * @uses MouseDeviceMethodsOverride::ProcessRawEvent_2 ($e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ProcessRawEvent(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ButtonCount($props){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LeaveWindow(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateProperties($args){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputElement $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MouseDown($device, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \System\Lazy_1 $intermediatePoints
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MouseMove($device, $timestamp, $root, $p, $properties, $inputModifiers, $intermediatePoints, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MouseUp($device, $timestamp, $root, $p, $props, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @param \Avalonia\Vector $delta
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MouseWheel($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @param \Avalonia\Vector $delta
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GestureMagnify($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @param \Avalonia\Vector $delta
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GestureRotate($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\IMouseDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $props
	 * @param \Avalonia\Vector $delta
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GestureSwipe($device, $timestamp, $root, $p, $props, $delta, $inputModifiers, $hitTest){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 * @return \Avalonia\Input\IPointer
	 */
	public  function TryGetPointer($ev){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

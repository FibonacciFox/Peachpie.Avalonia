<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PenDeviceMethodsOverride
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
class PenDevice extends \System\Object implements 
	\Avalonia\Input\IPenDevice,
	\Avalonia\Input\IPointerDevice,
	\Avalonia\Input\IInputDevice,
	\System\IDisposable
{
	/**
	 * @uses PenDeviceMethodsOverride::ProcessRawEvent_1 ($e)
	 * @uses PenDeviceMethodsOverride::ProcessRawEvent_2 ($e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ProcessRawEvent(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\Pointer $pointer
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputElement $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PenDown($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
	/**
	 * @param \Avalonia\Input\Pointer $pointer
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @param \System\Lazy_1 $intermediatePoints
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PenMove($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest, $intermediatePoints){}
	/**
	 * @param \Avalonia\Input\Pointer $pointer
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\IInputElement $root
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @param \Avalonia\Input\IInputElement $hitTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PenUp($pointer, $timestamp, $root, $p, $properties, $inputModifiers, $hitTest){}
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

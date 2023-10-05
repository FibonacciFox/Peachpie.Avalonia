<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointerOverPreProcessorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ClearPointerOver_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ClearPointerOver_2($pointer, $root, $timestamp, $position, $properties, $inputModifiers){}
}
/**
 */
class PointerOverPreProcessor extends \System\Object implements 
	\System\IObserver_1
{
	/**
	 * @var \System\Nullable_1[Avalonia\PixelPoint]
	 * @property
	 */
	public readonly $LastPosition;
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_LastPosition(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \Avalonia\Rect $dirtyRect
	 * @return \System\Void|void
	 */
	public  function SceneInvalidated($dirtyRect){}
	/**
	 * @uses PointerOverPreProcessorMethodsOverride::ClearPointerOver_1 ()
	 * @uses PointerOverPreProcessorMethodsOverride::ClearPointerOver_2 ($pointer, $root, $timestamp, $position, $properties, $inputModifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearPointerOver(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $e
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\Boolean $clearRoot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearChildrenPointerOver($e, $element, $clearRoot){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetPointerOver($pointer, $root, $element, $timestamp, $position, $properties, $inputModifiers){}
	/**
	 * @param \Avalonia\Input\IPointer $pointer
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Input\PointerPointProperties $properties
	 * @param \Avalonia\Input\KeyModifiers $inputModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetPointerOverToElement($pointer, $root, $element, $timestamp, $position, $properties, $inputModifiers){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetVisualParent($e){}
	/**
	 * @param \Avalonia\Input\IInputRoot $root
	 * @param \Avalonia\PixelPoint $p
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointToClient($root, $p){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

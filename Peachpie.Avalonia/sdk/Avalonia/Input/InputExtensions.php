<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InputExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public static function InputHitTest_1($element, $p){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public static function InputHitTest_2($element, $p, $filter){}
}
/**
 */
class InputExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Point $p
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetInputElementsAt($element, $p){}
	/**
	 * @uses InputExtensionsMethodsOverride::InputHitTest_1 ($element, $p)
	 * @uses InputExtensionsMethodsOverride::InputHitTest_2 ($element, $p, $filter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InputHitTest(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsHitTestVisible($visual){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

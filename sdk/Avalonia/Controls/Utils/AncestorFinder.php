<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AncestorFinderMethodsOverride
{
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function Create_1($control){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function Create_2($control, $ancestorType){}
}
/**
 */
class AncestorFinder extends \System\Object
{
	/**
	 * @uses AncestorFinderMethodsOverride::Create_1 ($control)
	 * @uses AncestorFinderMethodsOverride::Create_2 ($control, $ancestorType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

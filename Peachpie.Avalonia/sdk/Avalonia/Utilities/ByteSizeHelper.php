<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ByteSizeHelperMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_1($bytes, $separate){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
}
/**
 */
class ByteSizeHelper extends \System\Object
{
	/**
	 * @uses ByteSizeHelperMethodsOverride::ToString_1 ($bytes, $separate)
	 * @uses ByteSizeHelperMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

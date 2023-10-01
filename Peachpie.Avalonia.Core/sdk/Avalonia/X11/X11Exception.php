<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait X11ExceptionMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class X11Exception extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses X11ExceptionMethodsOverride::GetType_1 ()
	 * @uses X11ExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

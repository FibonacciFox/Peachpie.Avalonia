<?php
namespace Avalonia\Automation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ElementNotEnabledExceptionMethodsOverride
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
class ElementNotEnabledException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses ElementNotEnabledExceptionMethodsOverride::GetType_1 ()
	 * @uses ElementNotEnabledExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

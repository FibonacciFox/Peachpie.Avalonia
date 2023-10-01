<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DataValidationExceptionMethodsOverride
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
class DataValidationException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\Object|object
	 */
	public  function get_ErrorData(){}
	/**
	 * @uses DataValidationExceptionMethodsOverride::GetType_1 ()
	 * @uses DataValidationExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

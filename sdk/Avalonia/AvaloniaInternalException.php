<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaInternalExceptionMethodsOverride
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
class AvaloniaInternalException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses AvaloniaInternalExceptionMethodsOverride::GetType_1 ()
	 * @uses AvaloniaInternalExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RenderTargetNotReadyExceptionMethodsOverride
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
class RenderTargetNotReadyException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses RenderTargetNotReadyExceptionMethodsOverride::GetType_1 ()
	 * @uses RenderTargetNotReadyExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

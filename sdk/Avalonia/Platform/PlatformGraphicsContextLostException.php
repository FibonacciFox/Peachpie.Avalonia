<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformGraphicsContextLostExceptionMethodsOverride
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
class PlatformGraphicsContextLostException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses PlatformGraphicsContextLostExceptionMethodsOverride::GetType_1 ()
	 * @uses PlatformGraphicsContextLostExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

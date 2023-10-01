<?php
namespace Avalonia\Markup\Xaml;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait XamlLoadExceptionMethodsOverride
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
class XamlLoadException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @uses XamlLoadExceptionMethodsOverride::GetType_1 ()
	 * @uses XamlLoadExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

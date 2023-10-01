<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionParseExceptionMethodsOverride
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
class ExpressionParseException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @uses ExpressionParseExceptionMethodsOverride::GetType_1 ()
	 * @uses ExpressionParseExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

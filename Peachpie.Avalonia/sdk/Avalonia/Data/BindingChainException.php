<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BindingChainExceptionMethodsOverride
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
class BindingChainException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\String|string
	 */
	public  function get_Expression(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function set_Expression($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ExpressionErrorPoint(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function set_ExpressionErrorPoint($value){}
	/**
	 * @uses BindingChainExceptionMethodsOverride::GetType_1 ()
	 * @uses BindingChainExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

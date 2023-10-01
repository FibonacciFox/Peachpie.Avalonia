<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MarkupBindingChainExceptionMethodsOverride
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
class MarkupBindingChainException extends \Avalonia\Data\BindingChainException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasNodes(){}
	/**
	 * @param \System\String|string $node
	 * @return \System\Void|void
	 */
	public  function AddNode($node){}
	/**
	 * @param \System\String|string $expression
	 * @return \System\Void|void
	 */
	public  function Commit($expression){}
	/**
	 * @uses MarkupBindingChainExceptionMethodsOverride::GetType_1 ()
	 * @uses MarkupBindingChainExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}

<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicScopeMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetTokenFor_1($varArgMethod){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_2($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_3($method, $typeContext){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_4($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_5($field){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_6($field, $typeContext){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_7($type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_8($literal){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_9($signature){}
}
/**
 */
class DynamicScope extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\List_1[System\Object]
	 * @field
	 */
	protected readonly $m_tokens;
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Object|object
	 */
	protected  function get_Item($token){}
	/**
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_1 ($varArgMethod)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_2 ($method)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_3 ($method, $typeContext)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_4 ($method)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_5 ($field)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_6 ($field, $typeContext)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_7 ($type)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_8 ($literal)
	 * @uses DynamicScopeMethodsOverride::GetTokenFor_9 ($signature)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTokenFor(mixed ...$args){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\String|string
	 */
	protected  function GetString($token){}
	/**
	 * @param \System\Int32|int $token
	 * @param \System\Int32|int $fromMethod
	 * @return \System\Byte[]
	 */
	protected  function ResolveSignature($token, $fromMethod){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

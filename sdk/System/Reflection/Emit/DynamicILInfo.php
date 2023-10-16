<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicILInfoMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCode_1($code, $maxStackSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCode_2($code, $codeSize, $maxStackSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetExceptions_1($exceptions){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetExceptions_2($exceptions, $exceptionsSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetLocalSignature_1($localSignature){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetLocalSignature_2($localSignature, $signatureSize){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_1($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_2($method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_3($method, $contextType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_4($field){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_5($field, $contextType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_6($type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_7($literal){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetTokenFor_8($signature){}
}
/**
 */
class DynamicILInfo extends \System\Object
{
	/**
	 * @var \System\Reflection\Emit\DynamicMethod
	 * @property
	 */
	public readonly $DynamicMethod;
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\Reflection\Emit\DynamicMethod $dm
	 * @return \System\Void|void
	 */
	protected  function GetCallableMethod($module, $dm){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_LocalSignature(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_Exceptions(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_Code(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxStackSize(){}
	/**
	 * @return \System\Reflection\Emit\DynamicMethod
	 */
	public  function get_DynamicMethod(){}
	/**
	 * @return \System\Reflection\Emit\DynamicScope
	 */
	protected  function get_DynamicScope(){}
	/**
	 * @uses DynamicILInfoMethodsOverride::SetCode_1 ($code, $maxStackSize)
	 * @uses DynamicILInfoMethodsOverride::SetCode_2 ($code, $codeSize, $maxStackSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCode(mixed ...$args){}
	/**
	 * @uses DynamicILInfoMethodsOverride::SetExceptions_1 ($exceptions)
	 * @uses DynamicILInfoMethodsOverride::SetExceptions_2 ($exceptions, $exceptionsSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetExceptions(mixed ...$args){}
	/**
	 * @uses DynamicILInfoMethodsOverride::SetLocalSignature_1 ($localSignature)
	 * @uses DynamicILInfoMethodsOverride::SetLocalSignature_2 ($localSignature, $signatureSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetLocalSignature(mixed ...$args){}
	/**
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_1 ($method)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_2 ($method)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_3 ($method, $contextType)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_4 ($field)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_5 ($field, $contextType)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_6 ($type)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_7 ($literal)
	 * @uses DynamicILInfoMethodsOverride::GetTokenFor_8 ($signature)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTokenFor(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ParameterBuilderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
}
/**
 */
class ParameterBuilder extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsIn;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsOut;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsOptional;
	/**
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public  function SetConstant($defaultValue){}
	/**
	 * @uses ParameterBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses ParameterBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIn(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOut(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOptional(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

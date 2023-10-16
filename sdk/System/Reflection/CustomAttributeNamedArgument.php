<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomAttributeNamedArgumentMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class CustomAttributeNamedArgument extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Reflection\MemberInfo
	 * @property
	 */
	public readonly $MemberInfo;
	/**
	 * @var \System\Reflection\CustomAttributeTypedArgument
	 * @property
	 */
	public readonly $TypedValue;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $MemberName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsField;
	/**
	 * @param \System\Reflection\CustomAttributeNamedArgument $left
	 * @param \System\Reflection\CustomAttributeNamedArgument $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\CustomAttributeNamedArgument $left
	 * @param \System\Reflection\CustomAttributeNamedArgument $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses CustomAttributeNamedArgumentMethodsOverride::Equals_1 ($obj)
	 * @uses CustomAttributeNamedArgumentMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	protected  function get_ArgumentType(){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	public  function get_MemberInfo(){}
	/**
	 * @return \System\Reflection\CustomAttributeTypedArgument
	 */
	public  function get_TypedValue(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_MemberName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsField(){}
}

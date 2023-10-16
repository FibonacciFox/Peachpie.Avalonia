<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomAttributeTypedArgumentMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected  function ToString_2($typed){}
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
class CustomAttributeTypedArgument extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ArgumentType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @param \System\Reflection\CustomAttributeEncoding $encodedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CustomAttributeEncodingToType($encodedType){}
	/**
	 * @param \System\Int64|int $val
	 * @param \System\Reflection\CustomAttributeEncoding $encodedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodedValueToRawValue($val, $encodedType){}
	/**
	 * @param \System\Reflection\RuntimeModule $scope
	 * @param \System\String|string $typeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveType($scope, $typeName){}
	/**
	 * @param \System\Reflection\CustomAttributeTypedArgument $left
	 * @param \System\Reflection\CustomAttributeTypedArgument $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\CustomAttributeTypedArgument $left
	 * @param \System\Reflection\CustomAttributeTypedArgument $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses CustomAttributeTypedArgumentMethodsOverride::ToString_1 ()
	 * @uses CustomAttributeTypedArgumentMethodsOverride::ToString_2 ($typed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses CustomAttributeTypedArgumentMethodsOverride::Equals_1 ($obj)
	 * @uses CustomAttributeTypedArgumentMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \System\Type
	 */
	public  function get_ArgumentType(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanonicalizeValue($value){}
}

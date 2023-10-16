<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomAttributeEncodedArgumentMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ParseAttributeArguments_1($pCa, $cCa, $CustomAttributeCtorParameters, $CustomAttributeTypedArgument, $assembly){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ParseAttributeArguments_2($attributeBlob, $customAttributeCtorParameters, $customAttributeNamedParameters, $customAttributeModule){}
}
/**
 */
class CustomAttributeEncodedArgument extends \System\ValueType
{
	/**
	 * @var \System\Reflection\CustomAttributeType
	 * @property
	 */
	public readonly $CustomAttributeType;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $PrimitiveValue;
	/**
	 * @var \System\Reflection\CustomAttributeEncodedArgument[]
	 * @property
	 */
	public readonly $ArrayValue;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StringValue;
	/**
	 * @uses CustomAttributeEncodedArgumentMethodsOverride::ParseAttributeArguments_1 ($pCa, $cCa, $CustomAttributeCtorParameters, $CustomAttributeTypedArgument, $assembly)
	 * @uses CustomAttributeEncodedArgumentMethodsOverride::ParseAttributeArguments_2 ($attributeBlob, $customAttributeCtorParameters, $customAttributeNamedParameters, $customAttributeModule)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseAttributeArguments(mixed ...$args){}
	/**
	 * @return \System\Reflection\CustomAttributeType
	 */
	public  function get_CustomAttributeType(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_PrimitiveValue(){}
	/**
	 * @return \System\Reflection\CustomAttributeEncodedArgument[]
	 */
	public  function get_ArrayValue(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_StringValue(){}
}

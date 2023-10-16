<?php
namespace System\Diagnostics\Tracing;
/**
 */
class PropertyValue extends \System\ValueType
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $ReferenceValue;
	/**
	 * @var \System\Diagnostics\Tracing\PropertyValue+Scalar
	 * @property
	 */
	public readonly $ScalarValue;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ScalarLength;
	/**
	 * @param \System\Type $type
	 * @return \System\Func_2
	 */
	public static function GetFactory($type){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_ReferenceValue(){}
	/**
	 * @return \System\Diagnostics\Tracing\Scalar
	 */
	public  function get_ScalarValue(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ScalarLength(){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @return \System\Func_2
	 */
	public static function GetPropertyGetter($property){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBoxedValueTypePropertyGetter($property){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetReferenceTypePropertyGetter($property){}
}

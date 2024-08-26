<?php
namespace System\Diagnostics\Tracing;
final class PropertyValue extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $ReferenceValue;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\PropertyValue+Scalar
	 * @since readonly
	 */
	public $ScalarValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ScalarLength;
	/**
	 * @param \System\Type $type
	 * @return \System\Func_2[System\Object,System\Diagnostics\Tracing\PropertyValue]
	 */
	public static function GetFactory($type){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @return \System\Func_2[System\Diagnostics\Tracing\PropertyValue,System\Diagnostics\Tracing\PropertyValue]
	 */
	public static function GetPropertyGetter($property){}
	private static function GetBoxedValueTypePropertyGetter($property){}
	private static function GetReferenceTypePropertyGetter($property){}
}
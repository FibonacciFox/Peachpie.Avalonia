<?php
namespace System\Diagnostics\Tracing;
class TypeHelper extends \System\Object
{


	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @return \System\Func_2[System\Diagnostics\Tracing\PropertyValue,System\Diagnostics\Tracing\PropertyValue]
	 */
	abstract public function GetPropertyGetter($property);
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @param \System\Type $propertyType
	 * @return \System\Delegate
	 */
	protected static function GetGetMethod($property, $propertyType){}
}
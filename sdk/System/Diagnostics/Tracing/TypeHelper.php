<?php
namespace System\Diagnostics\Tracing;
/**
 */
class TypeHelper extends \System\Object
{
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @return \System\Func_2
	 */
	public  function GetPropertyGetter($property){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @param \System\Type $propertyType
	 * @return \System\Delegate
	 */
	protected static function GetGetMethod($property, $propertyType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

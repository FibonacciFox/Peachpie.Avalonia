<?php
namespace System\Diagnostics\Tracing;
/**
 */
class PropertyAnalysis extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected readonly $name;
	/**
	 * @var \System\Reflection\PropertyInfo
	 * @field
	 */
	protected readonly $propertyInfo;
	/**
	 * @var \System\Func_2[System\Diagnostics\Tracing\PropertyValue,System\Diagnostics\Tracing\PropertyValue]
	 * @field
	 */
	protected readonly $getter;
	/**
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 * @field
	 */
	protected readonly $typeInfo;
	/**
	 * @var \System\Diagnostics\Tracing\EventFieldAttribute
	 * @field
	 */
	protected readonly $fieldAttribute;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

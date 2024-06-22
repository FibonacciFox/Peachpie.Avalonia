<?php
namespace System\Diagnostics\Tracing;
final class PropertyAnalysis extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	protected $name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\PropertyInfo
	 */
	protected $propertyInfo;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Func_2[System\Diagnostics\Tracing\PropertyValue,System\Diagnostics\Tracing\PropertyValue]
	 */
	protected $getter;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	protected $typeInfo;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventFieldAttribute
	 */
	protected $fieldAttribute;
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyInfo $propertyInfo
	 * @param \System\Diagnostics\Tracing\TraceLoggingTypeInfo $typeInfo
	 * @param \System\Diagnostics\Tracing\EventFieldAttribute $fieldAttribute
	 */
	public function __construct($name, $propertyInfo, $typeInfo, $fieldAttribute){}
}
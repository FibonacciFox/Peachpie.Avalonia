<?php
namespace System\Reflection;
final class CustomAttributeNamedParameter extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncodedArgument
	 * @since readonly
	 */
	public $EncodedArgument;
	/**
	 * @param \System\String|string $argumentName
	 * @param \System\Reflection\CustomAttributeEncoding $fieldOrProperty
	 * @param \System\Reflection\CustomAttributeType $type
	 */
	public function __construct($argumentName, $fieldOrProperty, $type){}
}
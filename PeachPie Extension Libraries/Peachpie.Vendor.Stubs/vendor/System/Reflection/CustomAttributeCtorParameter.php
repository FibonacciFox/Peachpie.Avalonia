<?php
namespace System\Reflection;
final class CustomAttributeCtorParameter extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Reflection\CustomAttributeEncodedArgument
	 * @since readonly
	 */
	public $CustomAttributeEncodedArgument;
	/**
	 * @param \System\Reflection\CustomAttributeType $type
	 */
	public function __construct($type){}
}
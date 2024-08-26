<?php
namespace System\Reflection;
final class NullableAttributeStateParser extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Reflection\NullabilityInfoContext+NullableAttributeStateParser
	 * @since readonly
	 */
	public $Unknown;
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Reflection\NullabilityState& $state
	 * @return \System\Boolean|bool
	 */
	public function ParseNullableState($index, $state){}
	/**
	 * @param \System\Object|object $nullableAttributeArgument
	 */
	public function __construct($nullableAttributeArgument){}
}
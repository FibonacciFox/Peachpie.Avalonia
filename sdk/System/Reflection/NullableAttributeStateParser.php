<?php
namespace System\Reflection;
/**
 */
class NullableAttributeStateParser extends \System\ValueType
{
	/**
	 * @var \System\Reflection\NullabilityInfoContext+NullableAttributeStateParser
	 * @property
	 */
	public readonly $Unknown;
	/**
	 * @return \System\Reflection\NullableAttributeStateParser
	 */
	public static function get_Unknown(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Reflection\NullabilityState& $state
	 * @return \System\Boolean
	 */
	public  function ParseNullableState($index, $state){}
}

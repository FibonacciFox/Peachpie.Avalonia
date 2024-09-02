<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BooleanOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Parse_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Parse_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($value, &$result){}
}
final class Boolean extends \System\ValueType implements
	\System\IComparable,
	\System\IConvertible,
	\System\IComparable_1,
	\System\IEquatable_1
{
	use BooleanOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $TrueString;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $FalseString;
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten){}
	/**
	 * @uses BooleanOverride::CompareTo_1 <br>public , args: ($obj)<br>
	 * @uses BooleanOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function IsTrueStringIgnoreCase($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected static function IsFalseStringIgnoreCase($value){}
	/**
	 * @uses BooleanOverride::Parse_1 <br>public , args: ($value)<br>
	 * @uses BooleanOverride::Parse_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses BooleanOverride::TryParse_1 <br>public , args: ($value, &$result)<br>
	 * @uses BooleanOverride::TryParse_2 <br>public , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TrimWhiteSpaceAndNull($value){}
	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode(){}
	private function ToBoolean($provider){}
	private function ToChar($provider){}
	private function ToSByte($provider){}
	private function ToByte($provider){}
	private function ToInt16($provider){}
	private function ToUInt16($provider){}
	private function ToInt32($provider){}
	private function ToUInt32($provider){}
	private function ToInt64($provider){}
	private function ToUInt64($provider){}
	private function ToSingle($provider){}
	private function ToDouble($provider){}
	private function ToDecimal($provider){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
}
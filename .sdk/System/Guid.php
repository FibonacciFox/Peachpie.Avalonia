<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GuidOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function Parse_1 ($input){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function Parse_2 ($input){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function Parse_4 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($input, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($input, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function ParseExact_1 ($input, $format){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @return \System\Guid
	 */
	#[MethodOverride]public static function ParseExact_2 ($input, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($input, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\Guid& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($input, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $guidString [generic: System\Char]
	 * @param \System\UInt16& &$result
	 * @param \System\Boolean& $overflow
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParseHex_1 ($guidString, &$result, $overflow){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $guidString [generic: System\Char]
	 * @param \System\UInt32& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParseHex_2 ($guidString, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $guidString [generic: System\Char]
	 * @param \System\UInt32& &$result
	 * @param \System\Boolean& $overflow
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParseHex_3 ($guidString, &$result, $overflow){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Guid $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryFormat_1 ($destination, &$charsWritten, $format){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function TryFormat_2 ($destination, &$charsWritten, $format, $provider){}
	/**
	 * @param \System\Byte $b
	 */
	#[MethodOverride]public function __construct_1 ($b){}
	/**
	 * @param \System\ReadOnlySpan_1 $b [generic: System\Byte]
	 */
	#[MethodOverride]public function __construct_2 ($b){}
	/**
	 * @param \System\UInt32 $a
	 * @param \System\UInt16 $b
	 * @param \System\UInt16 $c
	 * @param \System\Byte $d
	 * @param \System\Byte $e
	 * @param \System\Byte $f
	 * @param \System\Byte $g
	 * @param \System\Byte $h
	 * @param \System\Byte $i
	 * @param \System\Byte $j
	 * @param \System\Byte $k
	 */
	#[MethodOverride]public function __construct_3 ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k){}
	/**
	 * @param \System\Int32|int $a
	 * @param \System\Int16 $b
	 * @param \System\Int16 $c
	 * @param \System\Byte $d
	 */
	#[MethodOverride]public function __construct_4 ($a, $b, $c, $d){}
	/**
	 * @param \System\Int32|int $a
	 * @param \System\Int16 $b
	 * @param \System\Int16 $c
	 * @param \System\Byte $d
	 * @param \System\Byte $e
	 * @param \System\Byte $f
	 * @param \System\Byte $g
	 * @param \System\Byte $h
	 * @param \System\Byte $i
	 * @param \System\Byte $j
	 * @param \System\Byte $k
	 */
	#[MethodOverride]public function __construct_5 ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k){}
	/**
	 * @param \System\String|string $g
	 */
	#[MethodOverride]public function __construct_6 ($g){}
}
final class Guid extends \System\ValueType implements
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use GuidOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Guid
	 */
	public static $Empty;
	/**
	 * @uses GuidOverride::Parse_1 <br>public , args: ($input)<br>
	 * @uses GuidOverride::Parse_2 <br>public , args: ($input)<br>
	 * @uses GuidOverride::Parse_3 <br>public , args: ($s, $provider)<br>
	 * @uses GuidOverride::Parse_4 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Guid|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses GuidOverride::TryParse_1 <br>public , args: ($input, &$result)<br>
	 * @uses GuidOverride::TryParse_2 <br>public , args: ($input, &$result)<br>
	 * @uses GuidOverride::TryParse_3 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses GuidOverride::TryParse_4 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses GuidOverride::ParseExact_1 <br>public , args: ($input, $format)<br>
	 * @uses GuidOverride::ParseExact_2 <br>public , args: ($input, $format)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Guid|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses GuidOverride::TryParseExact_1 <br>public , args: ($input, $format, &$result)<br>
	 * @uses GuidOverride::TryParseExact_2 <br>public , args: ($input, $format, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	private static function TryParseGuid($guidString, $result){}
	private static function TryParseExactB($guidString, $result){}
	private static function TryParseExactD($guidString, $result){}
	private static function TryParseExactN($guidString, $result){}
	private static function TryParseExactP($guidString, $result){}
	private static function TryParseExactX($guidString, $result){}
	private static function DecodeByte($ch1, $ch2, $invalidIfNegative){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses GuidOverride::TryParseHex_1 <br>private , args: ($guidString, &$result, $overflow)<br>
	 * @uses GuidOverride::TryParseHex_2 <br>private , args: ($guidString, &$result)<br>
	 * @uses GuidOverride::TryParseHex_3 <br>private , args: ($guidString, &$result, $overflow)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function TryParseHex (\override ...$args){}
	private static function EatAllWhitespace($str){}
	private static function IsHexPrefix($str, $i){}
	/**
	 * @return \System\Byte[]
	 */
	public function ToByteArray(){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	public function TryWriteBytes($destination){}
	private static function EqualsCore(&$left, &$right){}
	private static function GetResult($me, $them){}
	/**
	 * @uses GuidOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses GuidOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\Guid $a
	 * @param \System\Guid $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Guid $a
	 * @param \System\Guid $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	private static function HexsToChars($guidChars, $a, $b){}
	private static function HexsToCharsHexOutput($guidChars, $a, $b){}
	/**
	 * @uses GuidOverride::TryFormat_1 <br>public , args: ($destination, &$charsWritten, $format)<br>
	 * @uses GuidOverride::TryFormat_2 <br>private , args: ($destination, &$charsWritten, $format, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryFormat (\override ...$args){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @return \System\Guid
	 */
	public static function NewGuid(){}
	/**
	 * @uses GuidOverride::__construct_1 <br>public , args: ($b)<br>
	 * @uses GuidOverride::__construct_2 <br>public , args: ($b)<br>
	 * @uses GuidOverride::__construct_3 <br>public , args: ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k)<br>
	 * @uses GuidOverride::__construct_4 <br>public , args: ($a, $b, $c, $d)<br>
	 * @uses GuidOverride::__construct_5 <br>public , args: ($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k)<br>
	 * @uses GuidOverride::__construct_6 <br>public , args: ($g)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
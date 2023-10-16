<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GuidMethodsOverride
{
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function Parse_1($input){}
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function Parse_2($input){}
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function Parse_3($s, $provider){}
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function Parse_4($s, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($input, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($input, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($s, $provider, $result){}
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function ParseExact_1($input, $format){}
	/**
	 * @return \System\Guid
	 */
	#[MethodOverride] public static function ParseExact_2($input, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_1($input, $format, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParseExact_2($input, $format, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParseHex_1($guidString, $result, $overflow){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParseHex_2($guidString, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParseHex_3($guidString, $result, $overflow){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($format, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($g){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryFormat_1($destination, $charsWritten, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryFormat_2($destination, $charsWritten, $format, $provider){}
}
/**
 */
class Guid extends \System\ValueType implements 
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	/**
	 * @var \System\Guid
	 * @field
	 */
	public readonly $Empty;
	/**
	 * @uses GuidMethodsOverride::Parse_1 ($input)
	 * @uses GuidMethodsOverride::Parse_2 ($input)
	 * @uses GuidMethodsOverride::Parse_3 ($s, $provider)
	 * @uses GuidMethodsOverride::Parse_4 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses GuidMethodsOverride::TryParse_1 ($input, $result)
	 * @uses GuidMethodsOverride::TryParse_2 ($input, $result)
	 * @uses GuidMethodsOverride::TryParse_3 ($s, $provider, $result)
	 * @uses GuidMethodsOverride::TryParse_4 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @uses GuidMethodsOverride::ParseExact_1 ($input, $format)
	 * @uses GuidMethodsOverride::ParseExact_2 ($input, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ParseExact(mixed ...$args){}
	/**
	 * @uses GuidMethodsOverride::TryParseExact_1 ($input, $format, $result)
	 * @uses GuidMethodsOverride::TryParseExact_2 ($input, $format, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseExact(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseGuid($guidString, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactB($guidString, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactD($guidString, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactN($guidString, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactP($guidString, $result){}
	/**
	 * @param \System\ReadOnlySpan_1 $guidString
	 * @param \System\GuidResult& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseExactX($guidString, $result){}
	/**
	 * @param \System\UIntPtr $ch1
	 * @param \System\UIntPtr $ch2
	 * @param \System\Int32& $invalidIfNegative
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DecodeByte($ch1, $ch2, $invalidIfNegative){}
	/**
	 * @uses GuidMethodsOverride::TryParseHex_1 ($guidString, $result, $overflow)
	 * @uses GuidMethodsOverride::TryParseHex_2 ($guidString, $result)
	 * @uses GuidMethodsOverride::TryParseHex_3 ($guidString, $result, $overflow)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParseHex(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EatAllWhitespace($str){}
	/**
	 * @param \System\ReadOnlySpan_1 $str
	 * @param \System\Int32|int $i
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsHexPrefix($str, $i){}
	/**
	 * @return \System\Byte[]
	 */
	public  function ToByteArray(){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryWriteBytes($destination){}
	/**
	 * @uses GuidMethodsOverride::ToString_1 ()
	 * @uses GuidMethodsOverride::ToString_2 ($format)
	 * @uses GuidMethodsOverride::ToString_3 ($format, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses GuidMethodsOverride::Equals_1 ($o)
	 * @uses GuidMethodsOverride::Equals_2 ($g)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Guid& $left
	 * @param \System\Guid& $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EqualsCore($left, $right){}
	/**
	 * @param \System\UInt32 $me
	 * @param \System\UInt32 $them
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetResult($me, $them){}
	/**
	 * @uses GuidMethodsOverride::CompareTo_1 ($value)
	 * @uses GuidMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\Guid $a
	 * @param \System\Guid $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Guid $a
	 * @param \System\Guid $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \System\Char* $guidChars
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HexsToChars($guidChars, $a, $b){}
	/**
	 * @param \System\Char* $guidChars
	 * @param \System\Int32|int $a
	 * @param \System\Int32|int $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HexsToCharsHexOutput($guidChars, $a, $b){}
	/**
	 * @uses GuidMethodsOverride::TryFormat_1 ($destination, $charsWritten, $format)
	 * @uses GuidMethodsOverride::TryFormat_2 ($destination, $charsWritten, $format, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryFormat(mixed ...$args){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Guid $left
	 * @param \System\Guid $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @return \System\Guid
	 */
	public static function NewGuid(){}
}

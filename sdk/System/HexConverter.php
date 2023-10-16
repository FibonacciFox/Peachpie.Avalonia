<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait HexConverterMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_1($bytes, $casing){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryDecodeFromUtf16_1($chars, $bytes){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryDecodeFromUtf16_2($chars, $bytes, $charsProcessed){}
}
/**
 */
class HexConverter extends \System\Object
{
	/**
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @property
	 */
	public readonly $CharToHexLookup;
	/**
	 * @param \System\Byte $value
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $startingIndex
	 * @param \System\Casing $casing
	 * @return \System\Void|void
	 */
	public static function ToBytesBuffer($value, $buffer, $startingIndex, $casing){}
	/**
	 * @param \System\Byte $value
	 * @param \System\Span_1 $buffer
	 * @param \System\Int32|int $startingIndex
	 * @param \System\Casing $casing
	 * @return \System\Void|void
	 */
	public static function ToCharsBuffer($value, $buffer, $startingIndex, $casing){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Span_1 $chars
	 * @param \System\Casing $casing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeToUtf16_Vector128($bytes, $chars, $casing){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Span_1 $chars
	 * @param \System\Casing $casing
	 * @return \System\Void|void
	 */
	public static function EncodeToUtf16($bytes, $chars, $casing){}
	/**
	 * @uses HexConverterMethodsOverride::ToString_1 ($bytes, $casing)
	 * @uses HexConverterMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Char
	 */
	public static function ToCharUpper($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Char
	 */
	public static function ToCharLower($value){}
	/**
	 * @uses HexConverterMethodsOverride::TryDecodeFromUtf16_1 ($chars, $bytes)
	 * @uses HexConverterMethodsOverride::TryDecodeFromUtf16_2 ($chars, $bytes, $charsProcessed)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryDecodeFromUtf16(mixed ...$args){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Int32|int
	 */
	public static function FromChar($c){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Boolean
	 */
	public static function IsHexChar($c){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Boolean
	 */
	public static function IsHexUpperChar($c){}
	/**
	 * @param \System\Int32|int $c
	 * @return \System\Boolean
	 */
	public static function IsHexLowerChar($c){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public static function get_CharToHexLookup(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

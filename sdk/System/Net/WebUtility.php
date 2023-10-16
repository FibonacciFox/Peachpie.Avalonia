<?php
namespace System\Net;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WebUtilityMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function HtmlEncode_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function HtmlEncode_2($value, $output){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function HtmlEncode_3($input, $output){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function HtmlDecode_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function HtmlDecode_2($value, $output){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function HtmlDecode_3($input, $output){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function UrlDecodeInternal_1($value, $encoding){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] private static function UrlDecodeInternal_2($bytes, $offset, $count){}
}
/**
 */
class WebUtility extends \System\Object
{
	/**
	 * @uses WebUtilityMethodsOverride::HtmlEncode_1 ($value)
	 * @uses WebUtilityMethodsOverride::HtmlEncode_2 ($value, $output)
	 * @uses WebUtilityMethodsOverride::HtmlEncode_3 ($input, $output)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HtmlEncode(mixed ...$args){}
	/**
	 * @uses WebUtilityMethodsOverride::HtmlDecode_1 ($value)
	 * @uses WebUtilityMethodsOverride::HtmlDecode_2 ($value, $output)
	 * @uses WebUtilityMethodsOverride::HtmlDecode_3 ($input, $output)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HtmlDecode(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IndexOfHtmlEncodingChars($input){}
	/**
	 * @param \System\Byte[] $originalBytes
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @param \System\Byte[] $expandedBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEncodedBytes($originalBytes, $offset, $count, $expandedBytes){}
	/**
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	public static function UrlEncode($value){}
	/**
	 * @param \System\Byte[] $value
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public static function UrlEncodeToBytes($value, $offset, $count){}
	/**
	 * @uses WebUtilityMethodsOverride::UrlDecodeInternal_1 ($value, $encoding)
	 * @uses WebUtilityMethodsOverride::UrlDecodeInternal_2 ($bytes, $offset, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UrlDecodeInternal(mixed ...$args){}
	/**
	 * @param \System\String|string $encodedValue
	 * @return \System\String|string
	 */
	public static function UrlDecode($encodedValue){}
	/**
	 * @param \System\Byte[] $encodedValue
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public static function UrlDecodeToBytes($encodedValue, $offset, $count){}
	/**
	 * @param \System\UInt32 $smpChar
	 * @param \System\Char& $leadingSurrogate
	 * @param \System\Char& $trailingSurrogate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertSmpToUtf16($smpChar, $leadingSurrogate, $trailingSurrogate){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextUnicodeScalarValueFromUtf16Surrogate($input, $index){}
	/**
	 * @param \System\Char $ch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsUrlSafeChar($ch){}
	/**
	 * @param \System\Byte[] $bytes
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateUrlEncodingParameters($bytes, $offset, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

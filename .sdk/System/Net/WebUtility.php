<?php
namespace System\Net;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WebUtilityOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function HtmlEncode_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\IO\TextWriter $output
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function HtmlEncode_2 ($value, $output){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Text\ValueStringBuilder& $output
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function HtmlEncode_3 ($input, $output){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function HtmlDecode_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\IO\TextWriter $output
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function HtmlDecode_2 ($value, $output){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Text\ValueStringBuilder& $output
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function HtmlDecode_3 ($input, $output){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Text\Encoding $encoding
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function UrlDecodeInternal_1 ($value, $encoding){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Byte
	 */
	#[MethodOverride]private static function UrlDecodeInternal_2 ($bytes, $offset, $count){}
}
class WebUtility extends \System\Object
{
	use WebUtilityOverride;

	/**
	 * @uses WebUtilityOverride::HtmlEncode_1 <br>public , args: ($value)<br>
	 * @uses WebUtilityOverride::HtmlEncode_2 <br>public , args: ($value, $output)<br>
	 * @uses WebUtilityOverride::HtmlEncode_3 <br>private , args: ($input, $output)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function HtmlEncode (\override ...$args){}
	/**
	 * @uses WebUtilityOverride::HtmlDecode_1 <br>public , args: ($value)<br>
	 * @uses WebUtilityOverride::HtmlDecode_2 <br>public , args: ($value, $output)<br>
	 * @uses WebUtilityOverride::HtmlDecode_3 <br>private , args: ($input, $output)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function HtmlDecode (\override ...$args){}
	private static function IndexOfHtmlEncodingChars($input){}
	private static function GetEncodedBytes($originalBytes, $offset, $count, $expandedBytes){}
	/**
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	public static function UrlEncode($value){}
	/**
	 * @param \System\Byte $value
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public static function UrlEncodeToBytes($value, $offset, $count){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses WebUtilityOverride::UrlDecodeInternal_1 <br>private , args: ($value, $encoding)<br>
	 * @uses WebUtilityOverride::UrlDecodeInternal_2 <br>private , args: ($bytes, $offset, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Byte|mixed|\override
	 */
	#[MethodOverridePrivate]function UrlDecodeInternal (\override ...$args){}
	/**
	 * @param \System\String|string $encodedValue
	 * @return \System\String|string
	 */
	public static function UrlDecode($encodedValue){}
	/**
	 * @param \System\Byte $encodedValue
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $count
	 * @return \System\Byte[]
	 */
	public static function UrlDecodeToBytes($encodedValue, $offset, $count){}
	private static function ConvertSmpToUtf16($smpChar, &$leadingSurrogate, &$trailingSurrogate){}
	private static function GetNextUnicodeScalarValueFromUtf16Surrogate($input, $index){}
	private static function IsUrlSafeChar($ch){}
	private static function ValidateUrlEncodingParameters($bytes, $offset, $count){}
}
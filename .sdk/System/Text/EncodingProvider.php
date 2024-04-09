<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingProviderOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public function GetEncoding_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public function GetEncoding_2 ($codepage){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Text\EncoderFallback $encoderFallback
	 * @param \System\Text\DecoderFallback $decoderFallback
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public function GetEncoding_3 ($name, $encoderFallback, $decoderFallback){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @param \System\Text\EncoderFallback $encoderFallback
	 * @param \System\Text\DecoderFallback $decoderFallback
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public function GetEncoding_4 ($codepage, $encoderFallback, $decoderFallback){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]protected static function GetEncodingFromProvider_1 ($codepage){}
	/**
	 * @deprecated
	 * @param \System\String|string $encodingName
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]protected static function GetEncodingFromProvider_2 ($encodingName){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @param \System\Text\EncoderFallback $enc
	 * @param \System\Text\DecoderFallback $dec
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]protected static function GetEncodingFromProvider_3 ($codepage, $enc, $dec){}
	/**
	 * @deprecated
	 * @param \System\String|string $encodingName
	 * @param \System\Text\EncoderFallback $enc
	 * @param \System\Text\DecoderFallback $dec
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]protected static function GetEncodingFromProvider_4 ($encodingName, $enc, $dec){}
}
class EncodingProvider extends \System\Object
{
	use EncodingProviderOverride;

	/**
	 * @uses EncodingProviderOverride::GetEncoding_1 <br>public , args: ($name)<br>
	 * @uses EncodingProviderOverride::GetEncoding_2 <br>public , args: ($codepage)<br>
	 * @uses EncodingProviderOverride::GetEncoding_3 <br>public , args: ($name, $encoderFallback, $decoderFallback)<br>
	 * @uses EncodingProviderOverride::GetEncoding_4 <br>public , args: ($codepage, $encoderFallback, $decoderFallback)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\Encoding|mixed|\override
	 */
	#[MethodOverridePublic]function GetEncoding (\override ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\Text\EncodingInfo]
	 */
	public function GetEncodings(){}
	/**
	 * @param \System\Text\EncodingProvider $provider
	 * @return \System\Void|void
	 */
	protected static function AddProvider($provider){}
	/**
	 * @uses EncodingProviderOverride::GetEncodingFromProvider_1 <br>protected , args: ($codepage)<br>
	 * @uses EncodingProviderOverride::GetEncodingFromProvider_2 <br>protected , args: ($encodingName)<br>
	 * @uses EncodingProviderOverride::GetEncodingFromProvider_3 <br>protected , args: ($codepage, $enc, $dec)<br>
	 * @uses EncodingProviderOverride::GetEncodingFromProvider_4 <br>protected , args: ($encodingName, $enc, $dec)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\Encoding|mixed|\override
	 */
	#[MethodOverrideProtected]function GetEncodingFromProvider (\override ...$args){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2[System\Int32,System\Text\EncodingInfo]
	 */
	protected static function GetEncodingListFromProviders(){}
	/**
	 */
	public function __construct(){}
}
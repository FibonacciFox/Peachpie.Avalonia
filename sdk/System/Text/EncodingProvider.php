<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncodingProviderMethodsOverride
{
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public  function GetEncoding_1($name){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public  function GetEncoding_2($codepage){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public  function GetEncoding_3($name, $encoderFallback, $decoderFallback){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public  function GetEncoding_4($codepage, $encoderFallback, $decoderFallback){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] protected static function GetEncodingFromProvider_1($codepage){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] protected static function GetEncodingFromProvider_2($encodingName){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] protected static function GetEncodingFromProvider_3($codepage, $enc, $dec){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] protected static function GetEncodingFromProvider_4($encodingName, $enc, $dec){}
}
/**
 */
class EncodingProvider extends \System\Object
{
	/**
	 * @uses EncodingProviderMethodsOverride::GetEncoding_1 ($name)
	 * @uses EncodingProviderMethodsOverride::GetEncoding_2 ($codepage)
	 * @uses EncodingProviderMethodsOverride::GetEncoding_3 ($name, $encoderFallback, $decoderFallback)
	 * @uses EncodingProviderMethodsOverride::GetEncoding_4 ($codepage, $encoderFallback, $decoderFallback)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEncoding(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetEncodings(){}
	/**
	 * @param \System\Text\EncodingProvider $provider
	 * @return \System\Void|void
	 */
	protected static function AddProvider($provider){}
	/**
	 * @uses EncodingProviderMethodsOverride::GetEncodingFromProvider_1 ($codepage)
	 * @uses EncodingProviderMethodsOverride::GetEncodingFromProvider_2 ($encodingName)
	 * @uses EncodingProviderMethodsOverride::GetEncodingFromProvider_3 ($codepage, $enc, $dec)
	 * @uses EncodingProviderMethodsOverride::GetEncodingFromProvider_4 ($encodingName, $enc, $dec)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEncodingFromProvider(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\Dictionary_2
	 */
	protected static function GetEncodingListFromProviders(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

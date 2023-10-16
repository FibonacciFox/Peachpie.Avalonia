<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OSEncodingMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_4($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_5($chars, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_6($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCount_7($pChars, $charCount, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_1($s, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_2($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_3($chars){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_4($chars, $index, $count){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_5($s){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_6($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_7($chars, $charCount, $bytes, $byteCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_8($chars, $bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytes_9($pChars, $charCount, $pBytes, $byteCount, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_1($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_3($bytes, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_4($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharCount_5($pBytes, $byteCount, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_1($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_2($bytes){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_3($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_4($bytes, $byteCount, $chars, $charCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_5($bytes, $chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetChars_6($pBytes, $byteCount, $pChars, $charCount, $decoder){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($bytes, $byteCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($bytes){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_3($bytes){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_4($bytes, $index, $count){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAlwaysNormalized_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAlwaysNormalized_2($form){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowBytesOverflow_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowBytesOverflow_2($encoder, $nothingEncoded){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowCharsOverflow_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowCharsOverflow_2($decoder, $nothingDecoded){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCountWithFallback_1($pCharsOriginal, $originalCharCount, $charsConsumedSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCountWithFallback_2($chars, $originalCharsLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_1($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_2($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_1($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_2($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_3($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder){}
}
/**
 */
class OSEncoding extends \System\Text\Encoding implements 
	\System\ICloneable
{
	/**
	 * @var \System\Text\CodePageDataItem
	 * @field
	 */
	protected $_dataItem;
	/**
	 * @var \System\Text\EncoderFallback
	 * @field
	 */
	protected $encoderFallback;
	/**
	 * @var \System\Text\DecoderFallback
	 * @field
	 */
	protected $decoderFallback;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EncodingName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $WebName;
	/**
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @property
	 */
	public readonly $Preamble;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $BodyName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $HeaderName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WindowsCodePage;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBrowserDisplay;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBrowserSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMailNewsDisplay;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMailNewsSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSingleByte;
	/**
	 * @var \System\Text\EncoderFallback
	 * @property
	 */
	public $EncoderFallback;
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public $DecoderFallback;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReadOnly;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @uses OSEncodingMethodsOverride::GetByteCount_1 ($chars, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetByteCount_2 ($s)
	 * @uses OSEncodingMethodsOverride::GetByteCount_3 ($chars)
	 * @uses OSEncodingMethodsOverride::GetByteCount_4 ($s, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetByteCount_5 ($chars, $count)
	 * @uses OSEncodingMethodsOverride::GetByteCount_6 ($chars)
	 * @uses OSEncodingMethodsOverride::GetByteCount_7 ($pChars, $charCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::GetBytes_1 ($s, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses OSEncodingMethodsOverride::GetBytes_2 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses OSEncodingMethodsOverride::GetBytes_3 ($chars)
	 * @uses OSEncodingMethodsOverride::GetBytes_4 ($chars, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetBytes_5 ($s)
	 * @uses OSEncodingMethodsOverride::GetBytes_6 ($s, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetBytes_7 ($chars, $charCount, $bytes, $byteCount)
	 * @uses OSEncodingMethodsOverride::GetBytes_8 ($chars, $bytes)
	 * @uses OSEncodingMethodsOverride::GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetCharCount_2 ($bytes)
	 * @uses OSEncodingMethodsOverride::GetCharCount_3 ($bytes, $count)
	 * @uses OSEncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses OSEncodingMethodsOverride::GetCharCount_5 ($pBytes, $byteCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses OSEncodingMethodsOverride::GetChars_2 ($bytes)
	 * @uses OSEncodingMethodsOverride::GetChars_3 ($bytes, $index, $count)
	 * @uses OSEncodingMethodsOverride::GetChars_4 ($bytes, $byteCount, $chars, $charCount)
	 * @uses OSEncodingMethodsOverride::GetChars_5 ($bytes, $chars)
	 * @uses OSEncodingMethodsOverride::GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @param \System\Int32|int $codePage
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $count
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @return \System\Int32|int
	 */
	protected static function WideCharToMultiByte($codePage, $pChars, $count, $pBytes, $byteCount){}
	/**
	 * @param \System\Int32|int $codePage
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected static function MultiByteToWideChar($codePage, $pBytes, $byteCount, $pChars, $count){}
	/**
	 * @uses OSEncodingMethodsOverride::GetString_1 ($bytes, $byteCount)
	 * @uses OSEncodingMethodsOverride::GetString_2 ($bytes)
	 * @uses OSEncodingMethodsOverride::GetString_3 ($bytes)
	 * @uses OSEncodingMethodsOverride::GetString_4 ($bytes, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses OSEncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses OSEncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses OSEncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses OSEncodingMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @uses OSEncodingMethodsOverride::GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @uses OSEncodingMethodsOverride::GetBytesWithFallback_2 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytesWithFallback(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytesOriginal
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @return \System\Int32|int
	 */
	protected  function GetCharCountWithFallback($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar){}
	/**
	 * @uses OSEncodingMethodsOverride::GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses OSEncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @uses OSEncodingMethodsOverride::GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
}

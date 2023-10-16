<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncodingMethodsOverride
{
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function Convert_1($srcEncoding, $dstEncoding, $bytes){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public static function Convert_2($srcEncoding, $dstEncoding, $bytes, $index, $count){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public static function GetEncoding_1($codepage){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public static function GetEncoding_2($codepage, $encoderFallback, $decoderFallback){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public static function GetEncoding_3($name){}
	/**
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride] public static function GetEncoding_4($name, $encoderFallback, $decoderFallback){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars, $index, $count){}
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
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_1($chars){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_2($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_3($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_4($s){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_5($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_6($s, $charIndex, $charCount, $bytes, $byteIndex){}
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
	#[MethodOverride] public  function GetCharCount_1($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes, $index, $count){}
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
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_1($bytes){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_2($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_3($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
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
	#[MethodOverride] private  function GetByteCountWithFallback_2($pOriginalChars, $originalCharCount, $charsConsumedSoFar, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCountWithFallback_3($chars, $originalCharsLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_1($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetBytesWithFallback_2($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_3($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharCountWithFallback_1($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetCharCountWithFallback_2($pOriginalBytes, $originalByteCount, $bytesConsumedSoFar, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetCharCountWithFallback_3($bytes, $originalBytesLength, $decoder){}
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
class Encoding extends \System\Object implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_codePage;
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
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $Default;
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
	public readonly $EncodingName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $HeaderName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $WebName;
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
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $ASCII;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $Latin1;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $Unicode;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $BigEndianUnicode;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $UTF7;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $UTF8;
	/**
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $UTF32;
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_Default(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetDefaultFallbacks(){}
	/**
	 * @uses EncodingMethodsOverride::Convert_1 ($srcEncoding, $dstEncoding, $bytes)
	 * @uses EncodingMethodsOverride::Convert_2 ($srcEncoding, $dstEncoding, $bytes, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Convert(mixed ...$args){}
	/**
	 * @param \System\Text\EncodingProvider $provider
	 * @return \System\Void|void
	 */
	public static function RegisterProvider($provider){}
	/**
	 * @uses EncodingMethodsOverride::GetEncoding_1 ($codepage)
	 * @uses EncodingMethodsOverride::GetEncoding_2 ($codepage, $encoderFallback, $decoderFallback)
	 * @uses EncodingMethodsOverride::GetEncoding_3 ($name)
	 * @uses EncodingMethodsOverride::GetEncoding_4 ($name, $encoderFallback, $decoderFallback)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEncoding(mixed ...$args){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterDisallowedEncodings($encoding){}
	/**
	 * @return \System\Text\EncodingInfo[]
	 */
	public static function GetEncodings(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetPreamble(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_Preamble(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataItem(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_BodyName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EncodingName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HeaderName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_WebName(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_WindowsCodePage(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBrowserDisplay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBrowserSave(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMailNewsDisplay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMailNewsSave(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSingleByte(){}
	/**
	 * @return \System\Text\EncoderFallback
	 */
	public  function get_EncoderFallback(){}
	/**
	 * @param \System\Text\EncoderFallback $value
	 * @return \System\Void|void
	 */
	public  function set_EncoderFallback($value){}
	/**
	 * @return \System\Text\DecoderFallback
	 */
	public  function get_DecoderFallback(){}
	/**
	 * @param \System\Text\DecoderFallback $value
	 * @return \System\Void|void
	 */
	public  function set_DecoderFallback($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsReadOnly($value){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_ASCII(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_Latin1(){}
	/**
	 * @uses EncodingMethodsOverride::GetByteCount_1 ($chars)
	 * @uses EncodingMethodsOverride::GetByteCount_2 ($s)
	 * @uses EncodingMethodsOverride::GetByteCount_3 ($chars, $index, $count)
	 * @uses EncodingMethodsOverride::GetByteCount_4 ($s, $index, $count)
	 * @uses EncodingMethodsOverride::GetByteCount_5 ($chars, $count)
	 * @uses EncodingMethodsOverride::GetByteCount_6 ($chars)
	 * @uses EncodingMethodsOverride::GetByteCount_7 ($pChars, $charCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses EncodingMethodsOverride::GetBytes_1 ($chars)
	 * @uses EncodingMethodsOverride::GetBytes_2 ($chars, $index, $count)
	 * @uses EncodingMethodsOverride::GetBytes_3 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses EncodingMethodsOverride::GetBytes_4 ($s)
	 * @uses EncodingMethodsOverride::GetBytes_5 ($s, $index, $count)
	 * @uses EncodingMethodsOverride::GetBytes_6 ($s, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses EncodingMethodsOverride::GetBytes_7 ($chars, $charCount, $bytes, $byteCount)
	 * @uses EncodingMethodsOverride::GetBytes_8 ($chars, $bytes)
	 * @uses EncodingMethodsOverride::GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses EncodingMethodsOverride::GetCharCount_1 ($bytes)
	 * @uses EncodingMethodsOverride::GetCharCount_2 ($bytes, $index, $count)
	 * @uses EncodingMethodsOverride::GetCharCount_3 ($bytes, $count)
	 * @uses EncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses EncodingMethodsOverride::GetCharCount_5 ($pBytes, $byteCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses EncodingMethodsOverride::GetChars_1 ($bytes)
	 * @uses EncodingMethodsOverride::GetChars_2 ($bytes, $index, $count)
	 * @uses EncodingMethodsOverride::GetChars_3 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses EncodingMethodsOverride::GetChars_4 ($bytes, $byteCount, $chars, $charCount)
	 * @uses EncodingMethodsOverride::GetChars_5 ($bytes, $chars)
	 * @uses EncodingMethodsOverride::GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses EncodingMethodsOverride::GetString_1 ($bytes, $byteCount)
	 * @uses EncodingMethodsOverride::GetString_2 ($bytes)
	 * @uses EncodingMethodsOverride::GetString_3 ($bytes)
	 * @uses EncodingMethodsOverride::GetString_4 ($bytes, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CodePage(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsUTF8CodePage(){}
	/**
	 * @uses EncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses EncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @return \System\Text\Decoder
	 */
	public  function GetDecoder(){}
	/**
	 * @return \System\Text\Encoder
	 */
	public  function GetEncoder(){}
	/**
	 * @param \System\Int32|int $charCount
	 * @return \System\Int32|int
	 */
	public  function GetMaxByteCount($charCount){}
	/**
	 * @param \System\Int32|int $byteCount
	 * @return \System\Int32|int
	 */
	public  function GetMaxCharCount($byteCount){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_Unicode(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_BigEndianUnicode(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_UTF7(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_UTF8(){}
	/**
	 * @return \System\Text\Encoding
	 */
	public static function get_UTF32(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_BigEndianUTF32(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
	/**
	 * @param \System\IO\Stream $innerStream
	 * @param \System\Text\Encoding $innerStreamEncoding
	 * @param \System\Text\Encoding $outerStreamEncoding
	 * @param \System\Boolean $leaveOpen
	 * @return \System\IO\Stream
	 */
	public static function CreateTranscodingStream($innerStream, $innerStreamEncoding, $outerStreamEncoding, $leaveOpen){}
	/**
	 * @uses EncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses EncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowConversionOverflow(){}
	/**
	 * @uses EncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses EncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Text\Rune& $value
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	protected  function DecodeFirstRune($bytes, $value, $bytesConsumed){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Span_1 $bytes
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	protected  function EncodeRune($value, $bytes, $bytesWritten){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Int32& $byteCount
	 * @return \System\Boolean
	 */
	protected  function TryGetByteCount($value, $byteCount){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Text\EncoderFallback $fallback
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Int32|int
	 */
	protected  function GetByteCountFast($pChars, $charsLength, $fallback, $charsConsumed){}
	/**
	 * @uses EncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses EncodingMethodsOverride::GetByteCountWithFallback_2 ($pOriginalChars, $originalCharCount, $charsConsumedSoFar, $encoder)
	 * @uses EncodingMethodsOverride::GetByteCountWithFallback_3 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Int32|int
	 */
	protected  function GetBytesFast($pChars, $charsLength, $pBytes, $bytesLength, $charsConsumed){}
	/**
	 * @uses EncodingMethodsOverride::GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @uses EncodingMethodsOverride::GetBytesWithFallback_2 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar, $encoder)
	 * @uses EncodingMethodsOverride::GetBytesWithFallback_3 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytesWithFallback(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Text\DecoderFallback $fallback
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Int32|int
	 */
	protected  function GetCharCountFast($pBytes, $bytesLength, $fallback, $bytesConsumed){}
	/**
	 * @uses EncodingMethodsOverride::GetCharCountWithFallback_1 ($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar)
	 * @uses EncodingMethodsOverride::GetCharCountWithFallback_2 ($pOriginalBytes, $originalByteCount, $bytesConsumedSoFar, $decoder)
	 * @uses EncodingMethodsOverride::GetCharCountWithFallback_3 ($bytes, $originalBytesLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCountWithFallback(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Int32|int
	 */
	protected  function GetCharsFast($pBytes, $bytesLength, $pChars, $charsLength, $bytesConsumed){}
	/**
	 * @uses EncodingMethodsOverride::GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses EncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @uses EncodingMethodsOverride::GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
}

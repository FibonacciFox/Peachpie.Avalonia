<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConsoleEncodingMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($chars, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_4($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_5($s, $index, $count){}
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
	#[MethodOverride] public  function GetBytes_1($chars, $charCount, $bytes, $byteCount){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_2($chars){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_3($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_4($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_5($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_6($s, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_7($s, $index, $count){}
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
	#[MethodOverride] public  function GetCharCount_1($bytes, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_3($bytes, $index, $count){}
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
	#[MethodOverride] public  function GetChars_1($bytes, $byteCount, $chars, $charCount){}
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
	#[MethodOverride] public  function GetChars_4($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
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
	#[MethodOverride] public  function GetString_1($bytes){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($bytes, $index, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_3($bytes, $byteCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_4($bytes){}
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
class ConsoleEncoding extends \System\Text\Encoding implements 
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSingleByte;
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
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_1 ($chars)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_2 ($chars, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_3 ($chars, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_4 ($s)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_5 ($s, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_6 ($chars)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCount_7 ($pChars, $charCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_1 ($chars, $charCount, $bytes, $byteCount)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_2 ($chars)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_3 ($chars, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_4 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_5 ($s)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_6 ($s, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_7 ($s, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_8 ($chars, $bytes)
	 * @uses ConsoleEncodingMethodsOverride::GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetCharCount_1 ($bytes, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetCharCount_2 ($bytes)
	 * @uses ConsoleEncodingMethodsOverride::GetCharCount_3 ($bytes, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses ConsoleEncodingMethodsOverride::GetCharCount_5 ($pBytes, $byteCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetChars_1 ($bytes, $byteCount, $chars, $charCount)
	 * @uses ConsoleEncodingMethodsOverride::GetChars_2 ($bytes)
	 * @uses ConsoleEncodingMethodsOverride::GetChars_3 ($bytes, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetChars_4 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses ConsoleEncodingMethodsOverride::GetChars_5 ($bytes, $chars)
	 * @uses ConsoleEncodingMethodsOverride::GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetString_1 ($bytes)
	 * @uses ConsoleEncodingMethodsOverride::GetString_2 ($bytes, $index, $count)
	 * @uses ConsoleEncodingMethodsOverride::GetString_3 ($bytes, $byteCount)
	 * @uses ConsoleEncodingMethodsOverride::GetString_4 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses ConsoleEncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses ConsoleEncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses ConsoleEncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses ConsoleEncodingMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @uses ConsoleEncodingMethodsOverride::GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @uses ConsoleEncodingMethodsOverride::GetBytesWithFallback_2 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
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
	 * @uses ConsoleEncodingMethodsOverride::GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses ConsoleEncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @uses ConsoleEncodingMethodsOverride::GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
}

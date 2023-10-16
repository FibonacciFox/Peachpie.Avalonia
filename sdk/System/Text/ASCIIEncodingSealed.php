<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ASCIIEncodingSealedMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_4($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_5($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_6($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCount_7($pChars, $charCount, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_1($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_2($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_3($chars, $charCount, $bytes, $byteCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_4($chars, $bytes){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_5($chars){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_6($chars, $index, $count){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_7($s){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_8($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytes_9($pChars, $charCount, $pBytes, $byteCount, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_1($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_2($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_1($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_3($bytes){}
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
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_2($bytes, $byteCount, $chars, $charCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_3($bytes, $chars){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_4($bytes){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_5($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetChars_6($pBytes, $byteCount, $pChars, $charCount, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_1($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_2($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_3($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($bytes, $byteIndex, $byteCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($bytes, $byteCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_3($bytes){}
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
}
/**
 */
class ASCIIEncodingSealed extends \System\Text\ASCIIEncoding implements 
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSingleByte;
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
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_1 ($chars, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_2 ($chars)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_3 ($chars, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_4 ($chars)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_5 ($chars)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_6 ($s, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCount_7 ($pChars, $charCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_2 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_3 ($chars, $charCount, $bytes, $byteCount)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_4 ($chars, $bytes)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_5 ($chars)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_6 ($chars, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_7 ($s)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_8 ($s, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytesWithFallback_1 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetBytesWithFallback_2 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytesWithFallback(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharCount_2 ($bytes, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharCount_3 ($bytes)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharCount_5 ($pBytes, $byteCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_2 ($bytes, $byteCount, $chars, $charCount)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_3 ($bytes, $chars)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_4 ($bytes)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_5 ($bytes, $index, $count)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharsWithFallback_1 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetCharsWithFallback_3 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetString_1 ($bytes, $byteIndex, $byteCount)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetString_2 ($bytes, $byteCount)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetString_3 ($bytes)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetString_4 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses ASCIIEncodingSealedMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses ASCIIEncodingSealedMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses ASCIIEncodingSealedMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses ASCIIEncodingSealedMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
}

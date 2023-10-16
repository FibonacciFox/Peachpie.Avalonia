<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ASCIIEncodingMethodsOverride
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
class ASCIIEncoding extends \System\Text\Encoding implements 
	\System\ICloneable
{
	/**
	 * @var \System\Text\ASCIIEncoding+ASCIIEncodingSealed
	 * @field
	 */
	protected readonly $s_default;
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
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_1 ($chars, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_2 ($chars)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_3 ($chars, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_4 ($chars)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_5 ($chars)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_6 ($s, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCount_7 ($pChars, $charCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetByteCountCommon($pChars, $charCount){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_2 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_3 ($chars, $charCount, $bytes, $byteCount)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_4 ($chars, $bytes)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_5 ($chars)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_6 ($chars, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_7 ($s)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_8 ($s, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetBytesCommon($pChars, $charCount, $pBytes, $byteCount){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetBytesWithFallback_1 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
	 * @uses ASCIIEncodingMethodsOverride::GetBytesWithFallback_2 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytesWithFallback(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetCharCount_2 ($bytes, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetCharCount_3 ($bytes)
	 * @uses ASCIIEncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses ASCIIEncodingMethodsOverride::GetCharCount_5 ($pBytes, $byteCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCharCountCommon($pBytes, $byteCount){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses ASCIIEncodingMethodsOverride::GetChars_2 ($bytes, $byteCount, $chars, $charCount)
	 * @uses ASCIIEncodingMethodsOverride::GetChars_3 ($bytes, $chars)
	 * @uses ASCIIEncodingMethodsOverride::GetChars_4 ($bytes)
	 * @uses ASCIIEncodingMethodsOverride::GetChars_5 ($bytes, $index, $count)
	 * @uses ASCIIEncodingMethodsOverride::GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCharsCommon($pBytes, $byteCount, $pChars, $charCount){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetCharsWithFallback_1 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @uses ASCIIEncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses ASCIIEncodingMethodsOverride::GetCharsWithFallback_3 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetString_1 ($bytes, $byteIndex, $byteCount)
	 * @uses ASCIIEncodingMethodsOverride::GetString_2 ($bytes, $byteCount)
	 * @uses ASCIIEncodingMethodsOverride::GetString_3 ($bytes)
	 * @uses ASCIIEncodingMethodsOverride::GetString_4 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses ASCIIEncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses ASCIIEncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses ASCIIEncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses ASCIIEncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses ASCIIEncodingMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytesOriginal
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @return \System\Int32|int
	 */
	protected  function GetCharCountWithFallback($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar){}
}

<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UTF7EncodingMethodsOverride
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
	#[MethodOverride] public  function GetByteCount_3($chars, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCount_4($chars, $count, $baseEncoder){}
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
	#[MethodOverride] public  function GetByteCount_7($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_1($s, $charIndex, $charCount, $bytes, $byteIndex){}
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
	#[MethodOverride] protected  function GetBytes_4($chars, $charCount, $bytes, $byteCount, $baseEncoder){}
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
	#[MethodOverride] public  function GetBytes_9($chars, $bytes){}
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
	#[MethodOverride] protected  function GetCharCount_3($bytes, $count, $baseDecoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_4($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_5($bytes){}
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
	#[MethodOverride] protected  function GetChars_3($bytes, $byteCount, $chars, $charCount, $baseDecoder){}
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
	#[MethodOverride] public  function GetChars_6($bytes, $chars){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($bytes, $index, $count){}
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
class UTF7Encoding extends \System\Text\Encoding implements 
	\System\ICloneable
{
	/**
	 * @var \System\Text\UTF7Encoding
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MakeTables(){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_1 ($chars, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_2 ($s)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_3 ($chars, $count)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_4 ($chars, $count, $baseEncoder)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_5 ($chars)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_6 ($s, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetByteCount_7 ($chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetBytes_1 ($s, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_2 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_3 ($chars, $charCount, $bytes, $byteCount)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_4 ($chars, $charCount, $bytes, $byteCount, $baseEncoder)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_5 ($chars)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_6 ($chars, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_7 ($s)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_8 ($s, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetBytes_9 ($chars, $bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetCharCount_2 ($bytes, $count)
	 * @uses UTF7EncodingMethodsOverride::GetCharCount_3 ($bytes, $count, $baseDecoder)
	 * @uses UTF7EncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses UTF7EncodingMethodsOverride::GetCharCount_5 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses UTF7EncodingMethodsOverride::GetChars_2 ($bytes, $byteCount, $chars, $charCount)
	 * @uses UTF7EncodingMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $baseDecoder)
	 * @uses UTF7EncodingMethodsOverride::GetChars_4 ($bytes)
	 * @uses UTF7EncodingMethodsOverride::GetChars_5 ($bytes, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetChars_6 ($bytes, $chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetString_1 ($bytes, $index, $count)
	 * @uses UTF7EncodingMethodsOverride::GetString_2 ($bytes, $byteCount)
	 * @uses UTF7EncodingMethodsOverride::GetString_3 ($bytes)
	 * @uses UTF7EncodingMethodsOverride::GetString_4 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses UTF7EncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses UTF7EncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses UTF7EncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses UTF7EncodingMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @uses UTF7EncodingMethodsOverride::GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @uses UTF7EncodingMethodsOverride::GetBytesWithFallback_2 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
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
	 * @uses UTF7EncodingMethodsOverride::GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses UTF7EncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @uses UTF7EncodingMethodsOverride::GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
}

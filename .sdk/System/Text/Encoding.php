<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EncodingOverride {
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $srcEncoding
	 * @param \System\Text\Encoding $dstEncoding
	 * @param \System\Byte $bytes
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Convert_1 ($srcEncoding, $dstEncoding, $bytes){}
	/**
	 * @deprecated
	 * @param \System\Text\Encoding $srcEncoding
	 * @param \System\Text\Encoding $dstEncoding
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Convert_2 ($srcEncoding, $dstEncoding, $bytes, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public static function GetEncoding_1 ($codepage){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $codepage
	 * @param \System\Text\EncoderFallback $encoderFallback
	 * @param \System\Text\DecoderFallback $decoderFallback
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public static function GetEncoding_2 ($codepage, $encoderFallback, $decoderFallback){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public static function GetEncoding_3 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Text\EncoderFallback $encoderFallback
	 * @param \System\Text\DecoderFallback $decoderFallback
	 * @return \System\Text\Encoding
	 */
	#[MethodOverride]public static function GetEncoding_4 ($name, $encoderFallback, $decoderFallback){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_1 ($chars){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_3 ($chars, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_4 ($s, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Char* $chars
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_5 ($chars, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetByteCount_6 ($chars){}
	/**
	 * @deprecated
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetByteCount_7 ($pChars, $charCount, $encoder){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GetBytes_1 ($chars){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GetBytes_2 ($chars, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Char $chars
	 * @param \System\Int32|int $charIndex
	 * @param \System\Int32|int $charCount
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $byteIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetBytes_3 ($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GetBytes_4 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GetBytes_5 ($s, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $charIndex
	 * @param \System\Int32|int $charCount
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $byteIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetBytes_6 ($s, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @deprecated
	 * @param \System\Char* $chars
	 * @param \System\Int32|int $charCount
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetBytes_7 ($chars, $charCount, $bytes, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetBytes_8 ($chars, $bytes){}
	/**
	 * @deprecated
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetBytes_9 ($pChars, $charCount, $pBytes, $byteCount, $encoder){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetCharCount_1 ($bytes){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetCharCount_2 ($bytes, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetCharCount_3 ($bytes, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetCharCount_4 ($bytes){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCharCount_5 ($pBytes, $byteCount, $decoder){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @return \System\Char
	 */
	#[MethodOverride]public function GetChars_1 ($bytes){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Char
	 */
	#[MethodOverride]public function GetChars_2 ($bytes, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $byteIndex
	 * @param \System\Int32|int $byteCount
	 * @param \System\Char $chars
	 * @param \System\Int32|int $charIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetChars_3 ($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Char* $chars
	 * @param \System\Int32|int $charCount
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetChars_4 ($bytes, $byteCount, $chars, $charCount){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetChars_5 ($bytes, $chars){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $byteCount
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charCount
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetChars_6 ($pBytes, $byteCount, $pChars, $charCount, $decoder){}
	/**
	 * @deprecated
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_1 ($bytes, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_2 ($bytes){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_3 ($bytes){}
	/**
	 * @deprecated
	 * @param \System\Byte $bytes
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_4 ($bytes, $index, $count){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsAlwaysNormalized_1 (){}
	/**
	 * @deprecated
	 * @param \System\Text\NormalizationForm $form
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsAlwaysNormalized_2 ($form){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ThrowBytesOverflow_1 (){}
	/**
	 * @deprecated
	 * @param \System\Text\EncoderNLS $encoder
	 * @param \System\Boolean|bool $nothingEncoded
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ThrowBytesOverflow_2 ($encoder, $nothingEncoded){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ThrowCharsOverflow_1 (){}
	/**
	 * @deprecated
	 * @param \System\Text\DecoderNLS $decoder
	 * @param \System\Boolean|bool $nothingDecoded
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function ThrowCharsOverflow_2 ($decoder, $nothingDecoded){}
	/**
	 * @deprecated
	 * @param \System\Char* $pCharsOriginal
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Int32|int $charsConsumedSoFar
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar){}
	/**
	 * @deprecated
	 * @param \System\Char* $pOriginalChars
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Int32|int $charsConsumedSoFar
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetByteCountWithFallback_2 ($pOriginalChars, $originalCharCount, $charsConsumedSoFar, $encoder){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Int32|int $originalCharsLength
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetByteCountWithFallback_3 ($chars, $originalCharsLength, $encoder){}
	/**
	 * @deprecated
	 * @param \System\Char* $pOriginalChars
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Byte* $pOriginalBytes
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $charsConsumedSoFar
	 * @param \System\Int32|int $bytesWrittenSoFar
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar){}
	/**
	 * @deprecated
	 * @param \System\Char* $pOriginalChars
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Byte* $pOriginalBytes
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $charsConsumedSoFar
	 * @param \System\Int32|int $bytesWrittenSoFar
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetBytesWithFallback_2 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar, $encoder){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Int32|int $originalCharsLength
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32|int $originalBytesLength
	 * @param \System\Text\EncoderNLS $encoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetBytesWithFallback_3 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pBytesOriginal
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCharCountWithFallback_1 ($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pOriginalBytes
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetCharCountWithFallback_2 ($pOriginalBytes, $originalByteCount, $bytesConsumedSoFar, $decoder){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Int32|int $originalBytesLength
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetCharCountWithFallback_3 ($bytes, $originalBytesLength, $decoder){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pOriginalBytes
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Char* $pOriginalChars
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @param \System\Int32|int $charsWrittenSoFar
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar){}
	/**
	 * @deprecated
	 * @param \System\Byte* $pOriginalBytes
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Char* $pOriginalChars
	 * @param \System\Int32|int $originalCharCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @param \System\Int32|int $charsWrittenSoFar
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Int32|int $originalBytesLength
	 * @param \System\Span_1 $chars [generic: System\Char]
	 * @param \System\Int32|int $originalCharsLength
	 * @param \System\Text\DecoderNLS $decoder
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder){}
}
class Encoding extends \System\Object implements
	\System\ICloneable
{
	use EncodingOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_codePage;
	/**
	 * @field
	 * @var \System\Text\CodePageDataItem
	 */
	protected $_dataItem;
	/**
	 * @field
	 * @var \System\Text\EncoderFallback
	 */
	protected $encoderFallback;
	/**
	 * @field
	 * @var \System\Text\DecoderFallback
	 */
	protected $decoderFallback;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @since readonly
	 */
	public $Preamble;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BodyName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EncodingName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $HeaderName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $WebName;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $WindowsCodePage;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBrowserDisplay;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBrowserSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMailNewsDisplay;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMailNewsSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSingleByte;
	/**
	 * @property
	 * @var \System\Text\EncoderFallback
	 */
	public $EncoderFallback;
	/**
	 * @property
	 * @var \System\Text\DecoderFallback
	 */
	public $DecoderFallback;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $ASCII;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Latin1;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CodePage;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $Unicode;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $BigEndianUnicode;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $UTF7;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $UTF8;
	/**
	 * @property
	 * @var \System\Text\Encoding
	 * @since readonly
	 */
	public $UTF32;
	/**
	 * @return \System\Void|void
	 */
	protected function SetDefaultFallbacks(){}
	/**
	 * @uses EncodingOverride::Convert_1 <br>public , args: ($srcEncoding, $dstEncoding, $bytes)<br>
	 * @uses EncodingOverride::Convert_2 <br>public , args: ($srcEncoding, $dstEncoding, $bytes, $index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function Convert (\override ...$args){}
	/**
	 * @param \System\Text\EncodingProvider $provider
	 * @return \System\Void|void
	 */
	public static function RegisterProvider($provider){}
	/**
	 * @uses EncodingOverride::GetEncoding_1 <br>public , args: ($codepage)<br>
	 * @uses EncodingOverride::GetEncoding_2 <br>public , args: ($codepage, $encoderFallback, $decoderFallback)<br>
	 * @uses EncodingOverride::GetEncoding_3 <br>public , args: ($name)<br>
	 * @uses EncodingOverride::GetEncoding_4 <br>public , args: ($name, $encoderFallback, $decoderFallback)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\Encoding|mixed|\override
	 */
	#[MethodOverridePublic]function GetEncoding (\override ...$args){}
	private static function FilterDisallowedEncodings($encoding){}
	/**
	 * @return \System\Text\EncodingInfo[]
	 */
	public static function GetEncodings(){}
	/**
	 * @return \System\Byte[]
	 */
	public function GetPreamble(){}
	private function GetDataItem(){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @uses EncodingOverride::GetByteCount_1 <br>public , args: ($chars)<br>
	 * @uses EncodingOverride::GetByteCount_2 <br>public , args: ($s)<br>
	 * @uses EncodingOverride::GetByteCount_3 <br>public , args: ($chars, $index, $count)<br>
	 * @uses EncodingOverride::GetByteCount_4 <br>public , args: ($s, $index, $count)<br>
	 * @uses EncodingOverride::GetByteCount_5 <br>public , args: ($chars, $count)<br>
	 * @uses EncodingOverride::GetByteCount_6 <br>public , args: ($chars)<br>
	 * @uses EncodingOverride::GetByteCount_7 <br>protected , args: ($pChars, $charCount, $encoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetByteCount (\override ...$args){}
	/**
	 * @uses EncodingOverride::GetBytes_1 <br>public , args: ($chars)<br>
	 * @uses EncodingOverride::GetBytes_2 <br>public , args: ($chars, $index, $count)<br>
	 * @uses EncodingOverride::GetBytes_3 <br>public , args: ($chars, $charIndex, $charCount, $bytes, $byteIndex)<br>
	 * @uses EncodingOverride::GetBytes_4 <br>public , args: ($s)<br>
	 * @uses EncodingOverride::GetBytes_5 <br>public , args: ($s, $index, $count)<br>
	 * @uses EncodingOverride::GetBytes_6 <br>public , args: ($s, $charIndex, $charCount, $bytes, $byteIndex)<br>
	 * @uses EncodingOverride::GetBytes_7 <br>public , args: ($chars, $charCount, $bytes, $byteCount)<br>
	 * @uses EncodingOverride::GetBytes_8 <br>public , args: ($chars, $bytes)<br>
	 * @uses EncodingOverride::GetBytes_9 <br>protected , args: ($pChars, $charCount, $pBytes, $byteCount, $encoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetBytes (\override ...$args){}
	/**
	 * @uses EncodingOverride::GetCharCount_1 <br>public , args: ($bytes)<br>
	 * @uses EncodingOverride::GetCharCount_2 <br>public , args: ($bytes, $index, $count)<br>
	 * @uses EncodingOverride::GetCharCount_3 <br>public , args: ($bytes, $count)<br>
	 * @uses EncodingOverride::GetCharCount_4 <br>public , args: ($bytes)<br>
	 * @uses EncodingOverride::GetCharCount_5 <br>protected , args: ($pBytes, $byteCount, $decoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetCharCount (\override ...$args){}
	/**
	 * @uses EncodingOverride::GetChars_1 <br>public , args: ($bytes)<br>
	 * @uses EncodingOverride::GetChars_2 <br>public , args: ($bytes, $index, $count)<br>
	 * @uses EncodingOverride::GetChars_3 <br>public , args: ($bytes, $byteIndex, $byteCount, $chars, $charIndex)<br>
	 * @uses EncodingOverride::GetChars_4 <br>public , args: ($bytes, $byteCount, $chars, $charCount)<br>
	 * @uses EncodingOverride::GetChars_5 <br>public , args: ($bytes, $chars)<br>
	 * @uses EncodingOverride::GetChars_6 <br>protected , args: ($pBytes, $byteCount, $pChars, $charCount, $decoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|\System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetChars (\override ...$args){}
	/**
	 * @uses EncodingOverride::GetString_1 <br>public , args: ($bytes, $byteCount)<br>
	 * @uses EncodingOverride::GetString_2 <br>public , args: ($bytes)<br>
	 * @uses EncodingOverride::GetString_3 <br>public , args: ($bytes)<br>
	 * @uses EncodingOverride::GetString_4 <br>public , args: ($bytes, $index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetString (\override ...$args){}
	/**
	 * @uses EncodingOverride::IsAlwaysNormalized_1 <br>public , args: ()<br>
	 * @uses EncodingOverride::IsAlwaysNormalized_2 <br>public , args: ($form)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsAlwaysNormalized (\override ...$args){}
	/**
	 * @return \System\Text\Decoder
	 */
	public function GetDecoder(){}
	/**
	 * @return \System\Text\Encoder
	 */
	public function GetEncoder(){}
	/**
	 * @param \System\Int32|int $charCount
	 * @return \System\Int32|int
	 */
	abstract public function GetMaxByteCount($charCount);
	/**
	 * @param \System\Int32|int $byteCount
	 * @return \System\Int32|int
	 */
	abstract public function GetMaxCharCount($byteCount);
	/**
	 * @param \System\IO\Stream $innerStream
	 * @param \System\Text\Encoding $innerStreamEncoding
	 * @param \System\Text\Encoding $outerStreamEncoding
	 * @param \System\Boolean|bool $leaveOpen
	 * @return \System\IO\Stream
	 */
	public static function CreateTranscodingStream($innerStream, $innerStreamEncoding, $outerStreamEncoding, $leaveOpen){}
	/**
	 * @uses EncodingOverride::ThrowBytesOverflow_1 <br>protected , args: ()<br>
	 * @uses EncodingOverride::ThrowBytesOverflow_2 <br>protected , args: ($encoder, $nothingEncoded)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowBytesOverflow (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ThrowConversionOverflow(){}
	/**
	 * @uses EncodingOverride::ThrowCharsOverflow_1 <br>protected , args: ()<br>
	 * @uses EncodingOverride::ThrowCharsOverflow_2 <br>protected , args: ($decoder, $nothingDecoded)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function ThrowCharsOverflow (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes [generic: System\Byte]
	 * @param \System\Text\Rune& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	protected function DecodeFirstRune($bytes, &$value, &$bytesConsumed){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Span_1 $bytes [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Buffers\OperationStatus
	 */
	protected function EncodeRune($value, $bytes, &$bytesWritten){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Int32& &$byteCount
	 * @return \System\Boolean|bool
	 */
	protected function TryGetByteCount($value, &$byteCount){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Text\EncoderFallback $fallback
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Int32|int
	 */
	protected function GetByteCountFast($pChars, $charsLength, $fallback, &$charsConsumed){}
	/**
	 * @uses EncodingOverride::GetByteCountWithFallback_1 <br>protected , args: ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)<br>
	 * @uses EncodingOverride::GetByteCountWithFallback_2 <br>private , args: ($pOriginalChars, $originalCharCount, $charsConsumedSoFar, $encoder)<br>
	 * @uses EncodingOverride::GetByteCountWithFallback_3 <br>protected , args: ($chars, $originalCharsLength, $encoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetByteCountWithFallback (\override ...$args){}
	/**
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Int32|int
	 */
	protected function GetBytesFast($pChars, $charsLength, $pBytes, $bytesLength, &$charsConsumed){}
	/**
	 * @uses EncodingOverride::GetBytesWithFallback_1 <br>protected , args: ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)<br>
	 * @uses EncodingOverride::GetBytesWithFallback_2 <br>private , args: ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar, $encoder)<br>
	 * @uses EncodingOverride::GetBytesWithFallback_3 <br>protected , args: ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetBytesWithFallback (\override ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Text\DecoderFallback $fallback
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Int32|int
	 */
	protected function GetCharCountFast($pBytes, $bytesLength, $fallback, &$bytesConsumed){}
	/**
	 * @uses EncodingOverride::GetCharCountWithFallback_1 <br>protected , args: ($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar)<br>
	 * @uses EncodingOverride::GetCharCountWithFallback_2 <br>private , args: ($pOriginalBytes, $originalByteCount, $bytesConsumedSoFar, $decoder)<br>
	 * @uses EncodingOverride::GetCharCountWithFallback_3 <br>private , args: ($bytes, $originalBytesLength, $decoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCharCountWithFallback (\override ...$args){}
	/**
	 * @param \System\Byte* $pBytes
	 * @param \System\Int32|int $bytesLength
	 * @param \System\Char* $pChars
	 * @param \System\Int32|int $charsLength
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Int32|int
	 */
	protected function GetCharsFast($pBytes, $bytesLength, $pChars, $charsLength, &$bytesConsumed){}
	/**
	 * @uses EncodingOverride::GetCharsWithFallback_1 <br>protected , args: ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)<br>
	 * @uses EncodingOverride::GetCharsWithFallback_2 <br>protected , args: ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)<br>
	 * @uses EncodingOverride::GetCharsWithFallback_3 <br>protected , args: ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCharsWithFallback (\override ...$args){}
}
<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderDBCSMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_1($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes, $index, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_3($bytes, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_4($bytes, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_1($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_2($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_3($bytes, $byteCount, $chars, $charCount, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_4($bytes, $chars, $flush){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_1($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_2($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_3($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed){}
}
/**
 */
class DecoderDBCS extends \System\Text\Decoder
{
	/**
	 * @var \System\Text\DecoderFallback
	 * @field
	 */
	protected $_fallback;
	/**
	 * @var \System\Text\DecoderFallbackBuffer
	 * @field
	 */
	protected $_fallbackBuffer;
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public $Fallback;
	/**
	 * @var \System\Text\DecoderFallbackBuffer
	 * @property
	 */
	public readonly $FallbackBuffer;
	/**
	 * @param \System\Byte $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsLeadByte($b){}
	/**
	 * @uses DecoderDBCSMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses DecoderDBCSMethodsOverride::GetCharCount_2 ($bytes, $index, $count, $flush)
	 * @uses DecoderDBCSMethodsOverride::GetCharCount_3 ($bytes, $count, $flush)
	 * @uses DecoderDBCSMethodsOverride::GetCharCount_4 ($bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $count
	 * @param \System\Char* $chars
	 * @param \System\Int32|int $charCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertWithLeftOverByte($bytes, $count, $chars, $charCount){}
	/**
	 * @uses DecoderDBCSMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses DecoderDBCSMethodsOverride::GetChars_2 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush)
	 * @uses DecoderDBCSMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $flush)
	 * @uses DecoderDBCSMethodsOverride::GetChars_4 ($bytes, $chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses DecoderDBCSMethodsOverride::Convert_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderDBCSMethodsOverride::Convert_2 ($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderDBCSMethodsOverride::Convert_3 ($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsLastByteALeadByte($bytes, $count){}
}

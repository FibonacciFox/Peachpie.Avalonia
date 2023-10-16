<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OSEncoderMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars, $index, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($chars, $count, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_1($chars, $charIndex, $charCount, $bytes, $byteIndex, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_2($chars, $charCount, $bytes, $byteCount, $flush){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_3($chars, $bytes, $flush){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_1($chars, $charIndex, $charCount, $bytes, $byteIndex, $byteCount, $flush, $charsUsed, $bytesUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_2($chars, $charCount, $bytes, $byteCount, $flush, $charsUsed, $bytesUsed, $completed){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Convert_3($chars, $bytes, $flush, $charsUsed, $bytesUsed, $completed){}
}
/**
 */
class OSEncoder extends \System\Text\Encoder
{
	/**
	 * @var \System\Text\EncoderFallback
	 * @field
	 */
	protected $_fallback;
	/**
	 * @var \System\Text\EncoderFallbackBuffer
	 * @field
	 */
	protected $_fallbackBuffer;
	/**
	 * @var \System\Text\EncoderFallback
	 * @property
	 */
	public $Fallback;
	/**
	 * @var \System\Text\EncoderFallbackBuffer
	 * @property
	 */
	public readonly $FallbackBuffer;
	/**
	 * @uses OSEncoderMethodsOverride::GetByteCount_1 ($chars, $index, $count, $flush)
	 * @uses OSEncoderMethodsOverride::GetByteCount_2 ($chars, $count, $flush)
	 * @uses OSEncoderMethodsOverride::GetByteCount_3 ($chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @param \System\Char* $chars
	 * @param \System\Int32|int $count
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertWithLeftOverChar($chars, $count, $bytes, $byteCount){}
	/**
	 * @uses OSEncoderMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $flush)
	 * @uses OSEncoderMethodsOverride::GetBytes_2 ($chars, $charCount, $bytes, $byteCount, $flush)
	 * @uses OSEncoderMethodsOverride::GetBytes_3 ($chars, $bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses OSEncoderMethodsOverride::Convert_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses OSEncoderMethodsOverride::Convert_2 ($chars, $charCount, $bytes, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses OSEncoderMethodsOverride::Convert_3 ($chars, $bytes, $flush, $charsUsed, $bytesUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
}

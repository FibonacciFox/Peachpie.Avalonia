<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderMethodsOverride
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
class Encoder extends \System\Text\EncoderNLS
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $bits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $bitCount;
	/**
	 * @var \System\Char
	 * @field
	 */
	protected $_charLeftOver;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_throwOnOverflow;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_charsUsed;
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
	 * @var \System\Text\Encoding
	 * @property
	 */
	public readonly $Encoding;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $MustFlush;
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
	 * @uses EncoderMethodsOverride::GetByteCount_1 ($chars, $index, $count, $flush)
	 * @uses EncoderMethodsOverride::GetByteCount_2 ($chars, $count, $flush)
	 * @uses EncoderMethodsOverride::GetByteCount_3 ($chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses EncoderMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $flush)
	 * @uses EncoderMethodsOverride::GetBytes_2 ($chars, $charCount, $bytes, $byteCount, $flush)
	 * @uses EncoderMethodsOverride::GetBytes_3 ($chars, $bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses EncoderMethodsOverride::Convert_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses EncoderMethodsOverride::Convert_2 ($chars, $charCount, $bytes, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses EncoderMethodsOverride::Convert_3 ($chars, $bytes, $flush, $charsUsed, $bytesUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
}

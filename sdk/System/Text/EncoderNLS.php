<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderNLSMethodsOverride
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
class EncoderNLS extends \System\Text\Encoder
{
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
	 * @uses EncoderNLSMethodsOverride::GetByteCount_1 ($chars, $index, $count, $flush)
	 * @uses EncoderNLSMethodsOverride::GetByteCount_2 ($chars, $count, $flush)
	 * @uses EncoderNLSMethodsOverride::GetByteCount_3 ($chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses EncoderNLSMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $flush)
	 * @uses EncoderNLSMethodsOverride::GetBytes_2 ($chars, $charCount, $bytes, $byteCount, $flush)
	 * @uses EncoderNLSMethodsOverride::GetBytes_3 ($chars, $bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses EncoderNLSMethodsOverride::Convert_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses EncoderNLSMethodsOverride::Convert_2 ($chars, $charCount, $bytes, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses EncoderNLSMethodsOverride::Convert_3 ($chars, $bytes, $flush, $charsUsed, $bytesUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
	/**
	 * @return \System\Text\Encoding
	 */
	public  function get_Encoding(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_MustFlush(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasLeftoverData(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasState(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearMustFlush(){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Int32|int
	 */
	protected  function DrainLeftoverDataForGetByteCount($chars, $charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Span_1 $bytes
	 * @param \System\Int32& $charsConsumed
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Boolean
	 */
	protected  function TryDrainLeftoverDataForGetBytes($chars, $bytes, $charsConsumed, $bytesWritten){}
}

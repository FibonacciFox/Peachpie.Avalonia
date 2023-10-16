<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultEncoderMethodsOverride
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
class DefaultEncoder extends \System\Text\Encoder implements 
	\System\Runtime\Serialization\IObjectReference
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
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public  function GetRealObject($context){}
	/**
	 * @uses DefaultEncoderMethodsOverride::GetByteCount_1 ($chars, $index, $count, $flush)
	 * @uses DefaultEncoderMethodsOverride::GetByteCount_2 ($chars, $count, $flush)
	 * @uses DefaultEncoderMethodsOverride::GetByteCount_3 ($chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses DefaultEncoderMethodsOverride::GetBytes_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $flush)
	 * @uses DefaultEncoderMethodsOverride::GetBytes_2 ($chars, $charCount, $bytes, $byteCount, $flush)
	 * @uses DefaultEncoderMethodsOverride::GetBytes_3 ($chars, $bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses DefaultEncoderMethodsOverride::Convert_1 ($chars, $charIndex, $charCount, $bytes, $byteIndex, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses DefaultEncoderMethodsOverride::Convert_2 ($chars, $charCount, $bytes, $byteCount, $flush, $charsUsed, $bytesUsed, $completed)
	 * @uses DefaultEncoderMethodsOverride::Convert_3 ($chars, $bytes, $flush, $charsUsed, $bytesUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
}

<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefaultDecoderMethodsOverride
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
class DefaultDecoder extends \System\Text\Decoder implements 
	\System\Runtime\Serialization\IObjectReference
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
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public  function GetRealObject($context){}
	/**
	 * @uses DefaultDecoderMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses DefaultDecoderMethodsOverride::GetCharCount_2 ($bytes, $index, $count, $flush)
	 * @uses DefaultDecoderMethodsOverride::GetCharCount_3 ($bytes, $count, $flush)
	 * @uses DefaultDecoderMethodsOverride::GetCharCount_4 ($bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses DefaultDecoderMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses DefaultDecoderMethodsOverride::GetChars_2 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush)
	 * @uses DefaultDecoderMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $flush)
	 * @uses DefaultDecoderMethodsOverride::GetChars_4 ($bytes, $chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses DefaultDecoderMethodsOverride::Convert_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DefaultDecoderMethodsOverride::Convert_2 ($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DefaultDecoderMethodsOverride::Convert_3 ($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
}

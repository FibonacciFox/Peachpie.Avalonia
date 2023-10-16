<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderFallbackBufferMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Fallback_1($charUnknown, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Fallback_2($charUnknownHigh, $charUnknownLow, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function InternalFallback_1($chars, $charsConsumed){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function InternalFallback_2($ch, $chars){}
}
/**
 */
class EncoderFallbackBuffer extends \System\Object
{
	/**
	 * @var \System\Char*
	 * @field
	 */
	protected $charStart;
	/**
	 * @var \System\Char*
	 * @field
	 */
	protected $charEnd;
	/**
	 * @var \System\Text\EncoderNLS
	 * @field
	 */
	protected $encoder;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $setEncoder;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $bUsedEncoder;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $bFallingBack;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $iRecursionCount;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Remaining;
	/**
	 * @uses EncoderFallbackBufferMethodsOverride::Fallback_1 ($charUnknown, $index)
	 * @uses EncoderFallbackBufferMethodsOverride::Fallback_2 ($charUnknownHigh, $charUnknownLow, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Fallback(mixed ...$args){}
	/**
	 * @return \System\Char
	 */
	public  function GetNextChar(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MovePrevious(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Remaining(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InternalReset(){}
	/**
	 * @param \System\Char* $charStart
	 * @param \System\Char* $charEnd
	 * @param \System\Text\EncoderNLS $encoder
	 * @param \System\Boolean $setEncoder
	 * @return \System\Void|void
	 */
	protected  function InternalInitialize($charStart, $charEnd, $encoder, $setEncoder){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Text\EncoderNLS $encoder
	 * @param \System\Int32|int $originalCharCount
	 * @return \System\Text\EncoderFallbackBuffer
	 */
	protected static function CreateAndInitialize($encoding, $encoder, $originalCharCount){}
	/**
	 * @return \System\Char
	 */
	protected  function InternalGetNextChar(){}
	/**
	 * @uses EncoderFallbackBufferMethodsOverride::InternalFallback_1 ($chars, $charsConsumed)
	 * @uses EncoderFallbackBufferMethodsOverride::InternalFallback_2 ($ch, $chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InternalFallback(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Int32|int
	 */
	protected  function InternalFallbackGetByteCount($chars, $charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Span_1 $bytes
	 * @param \System\Int32& $charsConsumed
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Boolean
	 */
	protected  function TryInternalFallbackGetBytes($chars, $bytes, $charsConsumed, $bytesWritten){}
	/**
	 * @param \System\Span_1 $bytes
	 * @param \System\Int32& $bytesWritten
	 * @return \System\Boolean
	 */
	protected  function TryDrainRemainingDataForGetBytes($bytes, $bytesWritten){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function DrainRemainingDataForGetByteCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextRune(){}
	/**
	 * @param \System\Int32|int $charRecursive
	 * @return \System\Void|void
	 */
	protected static function ThrowLastCharRecursive($charRecursive){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

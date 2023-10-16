<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderFallbackBufferMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function InternalFallback_1($bytes, $pBytes, $chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function InternalFallback_2($bytes, $pBytes){}
}
/**
 */
class DecoderFallbackBuffer extends \System\Object
{
	/**
	 * @var \System\Byte*
	 * @field
	 */
	protected $byteStart;
	/**
	 * @var \System\Char*
	 * @field
	 */
	protected $charEnd;
	/**
	 * @var \System\Text\Encoding
	 * @field
	 */
	protected $_encoding;
	/**
	 * @var \System\Text\DecoderNLS
	 * @field
	 */
	protected $_decoder;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Remaining;
	/**
	 * @param \System\Byte[] $bytesUnknown
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public  function Fallback($bytesUnknown, $index){}
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
	 * @param \System\Byte* $byteStart
	 * @param \System\Char* $charEnd
	 * @return \System\Void|void
	 */
	protected  function InternalInitialize($byteStart, $charEnd){}
	/**
	 * @param \System\Text\Encoding $encoding
	 * @param \System\Text\DecoderNLS $decoder
	 * @param \System\Int32|int $originalByteCount
	 * @return \System\Text\DecoderFallbackBuffer
	 */
	protected static function CreateAndInitialize($encoding, $decoder, $originalByteCount){}
	/**
	 * @uses DecoderFallbackBufferMethodsOverride::InternalFallback_1 ($bytes, $pBytes, $chars)
	 * @uses DecoderFallbackBufferMethodsOverride::InternalFallback_2 ($bytes, $pBytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InternalFallback(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $remainingBytes
	 * @param \System\Int32|int $fallbackLength
	 * @return \System\Int32|int
	 */
	protected  function InternalFallbackGetCharCount($remainingBytes, $fallbackLength){}
	/**
	 * @param \System\ReadOnlySpan_1 $remainingBytes
	 * @param \System\Int32|int $fallbackLength
	 * @param \System\Span_1 $chars
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	protected  function TryInternalFallbackGetChars($remainingBytes, $fallbackLength, $chars, $charsWritten){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextRune(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function DrainRemainingDataForGetCharCount(){}
	/**
	 * @param \System\Span_1 $chars
	 * @param \System\Int32& $charsWritten
	 * @return \System\Boolean
	 */
	protected  function TryDrainRemainingDataForGetChars($chars, $charsWritten){}
	/**
	 * @param \System\Byte[] $bytesUnknown
	 * @return \System\Void|void
	 */
	protected static function ThrowLastBytesRecursive($bytesUnknown){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

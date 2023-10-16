<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderExceptionFallbackBufferMethodsOverride
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
class DecoderExceptionFallbackBuffer extends \System\Text\DecoderFallbackBuffer
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Throw($bytesUnknown, $index){}
	/**
	 * @uses DecoderExceptionFallbackBufferMethodsOverride::InternalFallback_1 ($bytes, $pBytes, $chars)
	 * @uses DecoderExceptionFallbackBufferMethodsOverride::InternalFallback_2 ($bytes, $pBytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InternalFallback(mixed ...$args){}
}

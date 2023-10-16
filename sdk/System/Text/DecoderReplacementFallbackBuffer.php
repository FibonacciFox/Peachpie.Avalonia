<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderReplacementFallbackBufferMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function InternalFallback_1($bytes, $pBytes){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function InternalFallback_2($bytes, $pBytes, $chars){}
}
/**
 */
class DecoderReplacementFallbackBuffer extends \System\Text\DecoderFallbackBuffer
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
	 * @uses DecoderReplacementFallbackBufferMethodsOverride::InternalFallback_1 ($bytes, $pBytes)
	 * @uses DecoderReplacementFallbackBufferMethodsOverride::InternalFallback_2 ($bytes, $pBytes, $chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InternalFallback(mixed ...$args){}
}

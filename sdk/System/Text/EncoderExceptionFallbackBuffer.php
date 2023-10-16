<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderExceptionFallbackBufferMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Fallback_1($charUnknown, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Fallback_2($charUnknownHigh, $charUnknownLow, $index){}
}
/**
 */
class EncoderExceptionFallbackBuffer extends \System\Text\EncoderFallbackBuffer
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
	 * @uses EncoderExceptionFallbackBufferMethodsOverride::Fallback_1 ($charUnknown, $index)
	 * @uses EncoderExceptionFallbackBufferMethodsOverride::Fallback_2 ($charUnknownHigh, $charUnknownLow, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Fallback(mixed ...$args){}
	/**
	 * @param \System\Char $ch
	 * @param \System\Char*& $chars
	 * @return \System\Boolean
	 */
	protected  function InternalFallback($ch, $chars){}
}

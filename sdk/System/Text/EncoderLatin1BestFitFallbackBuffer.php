<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EncoderLatin1BestFitFallbackBufferMethodsOverride
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
class EncoderLatin1BestFitFallbackBuffer extends \System\Text\EncoderFallbackBuffer
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
	 * @uses EncoderLatin1BestFitFallbackBufferMethodsOverride::Fallback_1 ($charUnknown, $index)
	 * @uses EncoderLatin1BestFitFallbackBufferMethodsOverride::Fallback_2 ($charUnknownHigh, $charUnknownLow, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Fallback(mixed ...$args){}
	/**
	 * @param \System\Char $cUnknown
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryBestFit($cUnknown){}
	/**
	 * @param \System\Char $ch
	 * @param \System\Char*& $chars
	 * @return \System\Boolean
	 */
	protected  function InternalFallback($ch, $chars){}
}

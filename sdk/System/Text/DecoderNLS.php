<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DecoderNLSMethodsOverride
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
class DecoderNLS extends \System\Text\Decoder
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_throwOnOverflow;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_bytesUsed;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $MustFlush;
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
	 * @uses DecoderNLSMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses DecoderNLSMethodsOverride::GetCharCount_2 ($bytes, $index, $count, $flush)
	 * @uses DecoderNLSMethodsOverride::GetCharCount_3 ($bytes, $count, $flush)
	 * @uses DecoderNLSMethodsOverride::GetCharCount_4 ($bytes, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses DecoderNLSMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses DecoderNLSMethodsOverride::GetChars_2 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $flush)
	 * @uses DecoderNLSMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $flush)
	 * @uses DecoderNLSMethodsOverride::GetChars_4 ($bytes, $chars, $flush)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses DecoderNLSMethodsOverride::Convert_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderNLSMethodsOverride::Convert_2 ($bytes, $byteCount, $chars, $charCount, $flush, $bytesUsed, $charsUsed, $completed)
	 * @uses DecoderNLSMethodsOverride::Convert_3 ($bytes, $chars, $flush, $bytesUsed, $charsUsed, $completed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Convert(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_MustFlush(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasState(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearMustFlush(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function GetLeftoverData(){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @return \System\Void|void
	 */
	protected  function SetLeftoverData($bytes){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasLeftoverData(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ClearLeftoverData(){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Int32|int
	 */
	protected  function DrainLeftoverDataForGetCharCount($bytes, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $bytes
	 * @param \System\Span_1 $chars
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Int32|int
	 */
	protected  function DrainLeftoverDataForGetChars($bytes, $chars, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $srcLeft
	 * @param \System\ReadOnlySpan_1 $srcRight
	 * @param \System\Span_1 $dest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConcatInto($srcLeft, $srcRight, $dest){}
}

<?php
namespace System\Buffers\Text;
/**
 */
class TimeSpanSplitter extends \System\ValueType
{
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $V1;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $V2;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $V3;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $V4;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $V5;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $IsNegative;
	/**
	 * @var \System\UInt32
	 * @field
	 */
	public $Separators;
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $periodUsedToSeparateDay
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Boolean
	 */
	public  function TrySplitTimeSpan($source, $periodUsedToSeparateDay, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $neverParseAsFraction
	 * @param \System\Int32& $srcIndex
	 * @param \System\UInt32& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseComponent($source, $neverParseAsFraction, $srcIndex, $value){}
}

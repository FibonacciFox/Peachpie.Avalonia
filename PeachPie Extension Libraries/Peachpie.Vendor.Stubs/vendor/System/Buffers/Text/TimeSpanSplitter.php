<?php
namespace System\Buffers\Text;
final class TimeSpanSplitter extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $V1;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $V2;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $V3;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $V4;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $V5;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $IsNegative;
	/**
	 * @field
	 * @var \System\UInt32
	 */
	public $Separators;
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Boolean|bool $periodUsedToSeparateDay
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Boolean|bool
	 */
	public function TrySplitTimeSpan($source, $periodUsedToSeparateDay, &$bytesConsumed){}
	private static function ParseComponent($source, $neverParseAsFraction, $srcIndex, &$value){}
}
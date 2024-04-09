<?php
namespace Avalonia\Media\TextFormatting;
final class BidiRange extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\SByte
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $LeftRunIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $RightRunIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $PreviousRangeIndex;
	/**
	 * @param \System\SByte $level
	 * @param \System\Int32|int $leftRunIndex
	 * @param \System\Int32|int $rightRunIndex
	 * @param \System\Int32|int $previousRangeIndex
	 */
	public function __construct($level, $leftRunIndex, $rightRunIndex, $previousRangeIndex){}
}
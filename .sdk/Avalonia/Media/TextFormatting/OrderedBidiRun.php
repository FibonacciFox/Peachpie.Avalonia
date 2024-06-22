<?php
namespace Avalonia\Media\TextFormatting;
final class OrderedBidiRun extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $RunIndex;
	/**
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @since readonly
	 */
	public $Run;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NextRunIndex;
	/**
	 * @param \System\Int32|int $runIndex
	 * @param \Avalonia\Media\TextFormatting\TextRun $run
	 * @param \System\SByte $level
	 */
	public function __construct($runIndex, $run, $level){}
}
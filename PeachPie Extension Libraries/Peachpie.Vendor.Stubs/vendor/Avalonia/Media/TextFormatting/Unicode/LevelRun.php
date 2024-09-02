<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class LevelRun extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @since readonly
	 */
	public $Sos;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @since readonly
	 */
	public $Eos;
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @param \System\Int32|int $level
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $sos
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $eos
	 */
	public function __construct($start, $length, $level, $sos, $eos){}
}
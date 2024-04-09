<?php
namespace Avalonia\Media\TextFormatting;
class DrawableTextRun extends \Avalonia\Media\TextFormatting\TextRun
{
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Baseline;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Point $origin
	 * @return \System\Void|void
	 */
	abstract public function Draw($drawingContext, $origin);
}
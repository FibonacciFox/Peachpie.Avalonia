<?php
namespace Avalonia\Media\TextFormatting;
class TextCollapsingProperties extends \System\Object
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Width;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @since readonly
	 */
	public $Symbol;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 * @since readonly
	 */
	public $FlowDirection;
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @return \Avalonia\Media\TextFormatting\TextRun[]
	 */
	abstract public function Collapse($textLine);
}
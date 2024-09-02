<?php
namespace Avalonia\Media\TextFormatting;
class JustificationProperties extends \System\Object
{
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Width;
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $textLine
	 * @return \System\Void|void
	 */
	abstract public function Justify($textLine);
}
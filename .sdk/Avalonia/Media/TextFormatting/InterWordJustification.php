<?php
namespace Avalonia\Media\TextFormatting;
class InterWordJustification extends \Avalonia\Media\TextFormatting\JustificationProperties
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Width;
	/**
	 * @param \System\Double|double $width
	 */
	public function __construct($width){}
}
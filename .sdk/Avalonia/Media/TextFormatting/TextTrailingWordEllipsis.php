<?php
namespace Avalonia\Media\TextFormatting;
final class TextTrailingWordEllipsis extends \Avalonia\Media\TextFormatting\TextCollapsingProperties
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
	 * @param \System\String|string $ellipsis
	 * @param \System\Double|double $width
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $textRunProperties
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 */
	public function __construct($ellipsis, $width, $textRunProperties, $flowDirection){}
}
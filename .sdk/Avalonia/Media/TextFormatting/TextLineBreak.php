<?php
namespace Avalonia\Media\TextFormatting;
class TextLineBreak extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextEndOfLine
	 * @since readonly
	 */
	public $TextEndOfLine;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 * @since readonly
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSplit;
	/**
	 * @param \Avalonia\Media\TextFormatting\TextEndOfLine $textEndOfLine
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Boolean|bool $isSplit
	 */
	public function __construct($textEndOfLine, $flowDirection, $isSplit){}
}
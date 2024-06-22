<?php
namespace Avalonia\Media\TextFormatting;
final class WrappingTextLineBreak extends \Avalonia\Media\TextFormatting\TextLineBreak
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
	 * @return \System\Collections\Generic\List_1[Avalonia\Media\TextFormatting\TextRun]
	 */
	public function AcquireRemainingRuns(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextEndOfLine $textEndOfLine
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \System\Collections\Generic\List_1 $remainingRuns [generic: Avalonia\Media\TextFormatting\TextRun]
	 */
	public function __construct($textEndOfLine, $flowDirection, $remainingRuns){}
}
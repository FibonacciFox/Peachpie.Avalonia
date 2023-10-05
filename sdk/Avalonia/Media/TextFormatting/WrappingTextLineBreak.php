<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class WrappingTextLineBreak extends \Avalonia\Media\TextFormatting\TextLineBreak
{
	/**
	 * @var \Avalonia\Media\TextFormatting\TextEndOfLine
	 * @property
	 */
	public readonly $TextEndOfLine;
	/**
	 * @var \Avalonia\Media\FlowDirection
	 * @property
	 */
	public readonly $FlowDirection;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSplit;
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function AcquireRemainingRuns(){}
}

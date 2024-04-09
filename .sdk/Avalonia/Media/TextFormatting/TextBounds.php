<?php
namespace Avalonia\Media\TextFormatting;
final class TextBounds extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Rectangle;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 * @since readonly
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Media\TextFormatting\TextRunBounds]
	 * @since readonly
	 */
	public $TextRunBounds;

}
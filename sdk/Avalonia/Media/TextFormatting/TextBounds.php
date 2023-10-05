<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class TextBounds extends \System\Object
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $Rectangle;
	/**
	 * @var \Avalonia\Media\FlowDirection
	 * @property
	 */
	public readonly $FlowDirection;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Media\TextFormatting\TextRunBounds]
	 * @property
	 */
	public readonly $TextRunBounds;
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rectangle(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	protected  function set_Rectangle($value){}
	/**
	 * @return \Avalonia\Media\FlowDirection
	 */
	public  function get_FlowDirection(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_TextRunBounds(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

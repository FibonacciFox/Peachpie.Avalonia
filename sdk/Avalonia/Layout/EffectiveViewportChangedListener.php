<?php
namespace Avalonia\Layout;
/**
 */
class EffectiveViewportChangedListener extends \System\Object
{
	/**
	 * @var \Avalonia\Layout\Layoutable
	 * @property
	 */
	public readonly $Listener;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $Viewport;
	/**
	 * @return \Avalonia\Layout\Layoutable
	 */
	public  function get_Listener(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Viewport(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_Viewport($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

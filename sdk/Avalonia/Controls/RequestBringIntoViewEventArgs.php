<?php
namespace Avalonia\Controls;
/**
 */
class RequestBringIntoViewEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Visual
	 * @property
	 */
	public $TargetObject;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $TargetRect;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Handled;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent
	 * @property
	 */
	public $RoutedEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @property
	 */
	public $Route;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Source;
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_TargetObject(){}
	/**
	 * @param \Avalonia\Visual $value
	 * @return \System\Void|void
	 */
	public  function set_TargetObject($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_TargetRect(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_TargetRect($value){}
}

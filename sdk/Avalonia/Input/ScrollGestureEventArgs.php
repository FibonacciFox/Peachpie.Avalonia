<?php
namespace Avalonia\Input;
/**
 */
class ScrollGestureEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $Delta;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ShouldEndScrollGesture;
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
	 * @return \System\Int32|int
	 */
	public  function get_Id(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_Delta(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ShouldEndScrollGesture(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ShouldEndScrollGesture($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetNextFreeId(){}
}

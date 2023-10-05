<?php
namespace Avalonia\Input;
/**
 */
class PullGestureEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
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
	 * @var \Avalonia\Input\PullDirection
	 * @property
	 */
	public readonly $PullDirection;
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
	 * @return \Avalonia\Input\PullDirection
	 */
	public  function get_PullDirection(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetNextFreeId(){}
}

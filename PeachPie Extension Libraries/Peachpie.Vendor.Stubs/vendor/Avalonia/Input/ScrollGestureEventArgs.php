<?php
namespace Avalonia\Input;
class ScrollGestureEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 * @since readonly
	 */
	public $Delta;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ShouldEndScrollGesture;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Handled;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutedEvent
	 */
	public $RoutedEvent;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 */
	public $Route;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Source;
	/**
	 * @return \System\Int32|int
	 */
	public static function GetNextFreeId(){}
	/**
	 * @param \System\Int32|int $id
	 * @param \Avalonia\Vector $delta
	 */
	public function __construct($id, $delta){}
}
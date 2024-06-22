<?php
namespace Avalonia\Input;
class PullGestureEndedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \Avalonia\Input\PullDirection
	 * @since readonly
	 */
	public $PullDirection;
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
	 * @param \System\Int32|int $id
	 * @param \Avalonia\Input\PullDirection $pullDirection
	 */
	public function __construct($id, $pullDirection){}
}
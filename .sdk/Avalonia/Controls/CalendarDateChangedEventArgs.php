<?php
namespace Avalonia\Controls;
class CalendarDateChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 */
	public $RemovedDate;
	/**
	 * @property
	 * @var \System\Nullable_1[System\DateTime]
	 */
	public $AddedDate;
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

}
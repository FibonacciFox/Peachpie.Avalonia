<?php
namespace Avalonia\Controls;
class SelectionChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \System\Collections\IList
	 * @since readonly
	 */
	public $AddedItems;
	/**
	 * @property
	 * @var \System\Collections\IList
	 * @since readonly
	 */
	public $RemovedItems;
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
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Collections\IList $removedItems
	 * @param \System\Collections\IList $addedItems
	 */
	public function __construct($routedEvent, $removedItems, $addedItems){}
}
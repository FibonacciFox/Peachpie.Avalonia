<?php
namespace Avalonia\Controls;
/**
 */
class SelectionChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Collections\IList
	 * @property
	 */
	public readonly $AddedItems;
	/**
	 * @var \System\Collections\IList
	 * @property
	 */
	public readonly $RemovedItems;
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
	 * @return \System\Collections\IList
	 */
	public  function get_AddedItems(){}
	/**
	 * @return \System\Collections\IList
	 */
	public  function get_RemovedItems(){}
}

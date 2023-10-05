<?php
namespace Avalonia\Controls;
/**
 */
class ContextRequestedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
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
	 * @param \Avalonia\Controls\Control $relativeTo
	 * @param \Avalonia\Point& $point
	 * @return \System\Boolean
	 */
	public  function TryGetPosition($relativeTo, $point){}
}

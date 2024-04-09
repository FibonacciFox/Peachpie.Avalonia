<?php
namespace Avalonia\Controls;
class CalendarModeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Controls\CalendarMode
	 */
	public $OldMode;
	/**
	 * @property
	 * @var \Avalonia\Controls\CalendarMode
	 */
	public $NewMode;
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
	 * @param \Avalonia\Controls\CalendarMode $oldMode
	 * @param \Avalonia\Controls\CalendarMode $newMode
	 */
	public function __construct($oldMode, $newMode){}
}
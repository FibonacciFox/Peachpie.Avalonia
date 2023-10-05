<?php
namespace Avalonia\Controls;
/**
 */
class CalendarModeChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Controls\CalendarMode
	 * @property
	 */
	public $OldMode;
	/**
	 * @var \Avalonia\Controls\CalendarMode
	 * @property
	 */
	public $NewMode;
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
	 * @return \Avalonia\Controls\CalendarMode
	 */
	public  function get_OldMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_OldMode($value){}
	/**
	 * @return \Avalonia\Controls\CalendarMode
	 */
	public  function get_NewMode(){}
	/**
	 * @param \Avalonia\Controls\CalendarMode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_NewMode($value){}
}

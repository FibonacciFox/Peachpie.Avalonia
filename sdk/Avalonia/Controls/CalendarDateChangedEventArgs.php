<?php
namespace Avalonia\Controls;
/**
 */
class CalendarDateChangedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Nullable_1[System\DateTime]
	 * @property
	 */
	public $RemovedDate;
	/**
	 * @var \System\Nullable_1[System\DateTime]
	 * @property
	 */
	public $AddedDate;
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
	 * @return \System\Nullable_1
	 */
	public  function get_RemovedDate(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RemovedDate($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_AddedDate(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_AddedDate($value){}
}

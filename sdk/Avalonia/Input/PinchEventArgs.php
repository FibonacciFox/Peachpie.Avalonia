<?php
namespace Avalonia\Input;
/**
 */
class PinchEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scale;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public readonly $ScaleOrigin;
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
	 * @return \System\Double|double
	 */
	public  function get_Scale(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_ScaleOrigin(){}
}

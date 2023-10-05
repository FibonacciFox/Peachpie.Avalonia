<?php
namespace Avalonia\Controls;
/**
 */
class SpinEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Controls\SpinDirection
	 * @property
	 */
	public readonly $Direction;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UsingMouseWheel;
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
	 * @return \Avalonia\Controls\SpinDirection
	 */
	public  function get_Direction(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsingMouseWheel(){}
}

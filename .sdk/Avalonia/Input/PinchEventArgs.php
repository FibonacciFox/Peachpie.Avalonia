<?php
namespace Avalonia\Input;
class PinchEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Scale;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $ScaleOrigin;
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
	 * @param \System\Double|double $scale
	 * @param \Avalonia\Point $scaleOrigin
	 */
	public function __construct($scale, $scaleOrigin){}
}
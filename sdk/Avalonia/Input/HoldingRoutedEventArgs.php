<?php
namespace Avalonia\Input;
/**
 */
class HoldingRoutedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @var \Avalonia\Input\HoldingState
	 * @property
	 */
	public readonly $HoldingState;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \Avalonia\Input\PointerType
	 * @property
	 */
	public readonly $PointerType;
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
	 * @return \Avalonia\Input\HoldingState
	 */
	public  function get_HoldingState(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @return \Avalonia\Input\PointerType
	 */
	public  function get_PointerType(){}
}

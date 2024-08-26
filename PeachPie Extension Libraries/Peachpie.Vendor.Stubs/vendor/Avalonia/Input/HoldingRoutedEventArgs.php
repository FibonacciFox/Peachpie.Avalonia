<?php
namespace Avalonia\Input;
class HoldingRoutedEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Input\HoldingState
	 * @since readonly
	 */
	public $HoldingState;
	/**
	 * @property
	 * @var \Avalonia\Point
	 * @since readonly
	 */
	public $Position;
	/**
	 * @property
	 * @var \Avalonia\Input\PointerType
	 * @since readonly
	 */
	public $PointerType;
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
	 * @param \Avalonia\Input\HoldingState $holdingState
	 * @param \Avalonia\Point $position
	 * @param \Avalonia\Input\PointerType $pointerType
	 */
	public function __construct($holdingState, $position, $pointerType){}
}
<?php
namespace Avalonia\Controls;
class RequestBringIntoViewEventArgs extends \Avalonia\Interactivity\RoutedEventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Visual
	 */
	public $TargetObject;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $TargetRect;
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
	 */
	public function __construct(){}
}
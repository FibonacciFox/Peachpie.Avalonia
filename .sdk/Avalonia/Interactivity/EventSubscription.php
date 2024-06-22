<?php
namespace Avalonia\Interactivity;
final class EventSubscription extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Action_3[System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @since readonly
	 */
	public $InvokeAdapter;
	/**
	 * @property
	 * @var \System\Delegate
	 * @since readonly
	 */
	public $Handler;
	/**
	 * @property
	 * @var \Avalonia\Interactivity\RoutingStrategies
	 * @since readonly
	 */
	public $Routes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HandledEventsToo;
	/**
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @param \System\Action_3 $invokeAdapter [generic: System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 */
	public function __construct($handler, $routes, $handledEventsToo, $invokeAdapter){}
}
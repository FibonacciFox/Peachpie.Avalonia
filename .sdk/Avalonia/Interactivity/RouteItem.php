<?php
namespace Avalonia\Interactivity;
final class RouteItem extends \System\ValueType
{
	/**
	 * @property
	 * @var \Avalonia\Interactivity\Interactive
	 * @since readonly
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Delegate
	 * @since readonly
	 */
	public $Handler;
	/**
	 * @property
	 * @var \System\Action_3[System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @since readonly
	 */
	public $Adapter;
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
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @param \System\Delegate $handler
	 * @param \System\Action_3 $adapter [generic: System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 */
	public function __construct($target, $handler, $adapter, $routes, $handledEventsToo){}
}
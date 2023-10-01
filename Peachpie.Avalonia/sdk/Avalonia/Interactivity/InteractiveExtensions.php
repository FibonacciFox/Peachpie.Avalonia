<?php
namespace Avalonia\Interactivity;
/**
 */
class InteractiveExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\Interactivity\Interactive $o
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent
	 * @param \System\EventHandler_1 $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean $handledEventsToo
	 * @return \System\IDisposable
	 */
	public static function AddDisposableHandler($o, $routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $o
	 * @return \Avalonia\Interactivity\Interactive
	 */
	public static function GetInteractiveParent($o){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $o
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean $handledEventsToo
	 * @return \System\IObservable_1
	 */
	public static function GetObservable($o, $routedEvent, $routes, $handledEventsToo){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

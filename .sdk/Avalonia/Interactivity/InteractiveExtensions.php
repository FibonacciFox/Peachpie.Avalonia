<?php
namespace Avalonia\Interactivity;
class InteractiveExtensions extends \System\Object
{


	/**
	 * @param \Avalonia\Interactivity\Interactive $o
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent [generic: TEventArgs]
	 * @param \System\EventHandler_1 $handler [generic: TEventArgs]
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
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
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent [generic: TEventArgs]
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @return \System\IObservable_1[TEventArgs]
	 */
	public static function GetObservable($o, $routedEvent, $routes, $handledEventsToo){}
}
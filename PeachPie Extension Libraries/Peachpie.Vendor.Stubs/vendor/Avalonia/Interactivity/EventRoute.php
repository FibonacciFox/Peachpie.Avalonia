<?php
namespace Avalonia\Interactivity;
class EventRoute extends \System\Object implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasHandlers;
	/**
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @param \System\Action_3 $adapter [generic: System\Delegate,System\Object,Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function Add($target, $handler, $routes, $handledEventsToo, $adapter){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @return \System\Void|void
	 */
	public function AddClassHandler($target){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $source
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	public function RaiseEvent($source, $e){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function RaiseEventImpl($e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $e
	 */
	public function __construct($e){}
}
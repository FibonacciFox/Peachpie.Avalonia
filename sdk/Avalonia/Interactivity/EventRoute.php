<?php
namespace Avalonia\Interactivity;
/**
 */
class EventRoute extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasHandlers;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasHandlers(){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean $handledEventsToo
	 * @param \System\Action_3 $adapter
	 * @return \System\Void|void
	 */
	public  function Add($target, $handler, $routes, $handledEventsToo, $adapter){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $target
	 * @return \System\Void|void
	 */
	public  function AddClassHandler($target){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $source
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function RaiseEvent($source, $e){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseEventImpl($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

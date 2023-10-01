<?php
namespace Avalonia\Utilities;
/**
 */
class WeakEventHandlerManager extends \System\Object
{
	/**
	 * @param \Avalonia\Utilities\TTarget $target
	 * @param \System\String|string $eventName
	 * @param \System\EventHandler_1 $subscriber
	 * @return \System\Void|void
	 */
	public static function Subscribe($target, $eventName, $subscriber){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\String|string $eventName
	 * @param \System\EventHandler_1 $subscriber
	 * @return \System\Void|void
	 */
	public static function Unsubscribe($target, $eventName, $subscriber){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

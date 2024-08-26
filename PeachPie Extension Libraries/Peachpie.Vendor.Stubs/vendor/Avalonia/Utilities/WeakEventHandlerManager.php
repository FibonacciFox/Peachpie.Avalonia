<?php
namespace Avalonia\Utilities;
class WeakEventHandlerManager extends \System\Object
{

	/**
	 * @param \TTarget $target
	 * @param \System\String|string $eventName
	 * @param \System\EventHandler_1 $subscriber [generic: TEventArgs]
	 * @return \System\Void|void
	 */
	public static function Subscribe($target, $eventName, $subscriber){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\String|string $eventName
	 * @param \System\EventHandler_1 $subscriber [generic: TEventArgs]
	 * @return \System\Void|void
	 */
	public static function Unsubscribe($target, $eventName, $subscriber){}
}
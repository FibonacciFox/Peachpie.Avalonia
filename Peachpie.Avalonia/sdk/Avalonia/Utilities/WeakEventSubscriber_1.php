<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class WeakEventSubscriber_1 extends \System\Object implements 
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @param \System\Action_3 $value
	 * @return \System\Void|void
	 */
	public  function add_Event($value){}
	/**
	 * @param \System\Action_3 $value
	 * @return \System\Void|void
	 */
	public  function remove_Event($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\WeakEvent $ev
	 * @param \Avalonia\Utilities\TEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($sender, $ev, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

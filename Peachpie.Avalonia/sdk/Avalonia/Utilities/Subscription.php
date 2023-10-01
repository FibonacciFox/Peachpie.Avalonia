<?php
namespace Avalonia\Utilities;
/**
 */
class Subscription extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Destroy(){}
	/**
	 * @param \Avalonia\Utilities\IWeakEventSubscriber_1 $s
	 * @return \System\Void|void
	 */
	public  function Add($s){}
	/**
	 * @param \Avalonia\Utilities\IWeakEventSubscriber_1 $s
	 * @return \System\Void|void
	 */
	public  function Remove($s){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScheduleCompact(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Compact(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\TEventArgs $eventArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($sender, $eventArgs){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

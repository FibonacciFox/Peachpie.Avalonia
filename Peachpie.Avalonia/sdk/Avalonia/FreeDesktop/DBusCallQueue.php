<?php
namespace Avalonia\FreeDesktop;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DBusCallQueueMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function EnqueueAsync_1($cb){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public  function EnqueueAsync_2($cb){}
}
/**
 */
class DBusCallQueue extends \System\Object
{
	/**
	 * @param \System\Func_1 $cb
	 * @return \System\Void|void
	 */
	public  function Enqueue($cb){}
	/**
	 * @uses DBusCallQueueMethodsOverride::EnqueueAsync_1 ($cb)
	 * @uses DBusCallQueueMethodsOverride::EnqueueAsync_2 ($cb)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EnqueueAsync(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Process(){}
	/**
	 * @return \System\Void|void
	 */
	public  function FailAll(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

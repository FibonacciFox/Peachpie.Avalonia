<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimerHolderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Close_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Close_2($notifyObject){}
}
/**
 */
class TimerHolder extends \System\Object
{
	/**
	 * @var \System\Threading\TimerQueueTimer
	 * @field
	 */
	protected readonly $_timer;
	/**
	 * @uses TimerHolderMethodsOverride::Close_1 ()
	 * @uses TimerHolderMethodsOverride::Close_2 ($notifyObject)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Close(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function CloseAsync(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Animation;
/**
 */
class ClockObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasSubscriptions(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasSubscriptions($value){}
	/**
	 * @param \System\TimeSpan $time
	 * @return \System\Void|void
	 */
	public  function Pulse($time){}
}

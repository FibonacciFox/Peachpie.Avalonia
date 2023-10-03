<?php
namespace Avalonia\Animation;
/**
 */
class TransitionInstance extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements 
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{
	/**
	 * @param \System\TimeSpan $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TimerTick($t){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnError($error){}
	/**
	 * @param \System\TimeSpan $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
}

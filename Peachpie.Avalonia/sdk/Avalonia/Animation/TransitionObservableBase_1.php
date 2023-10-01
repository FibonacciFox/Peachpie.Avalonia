<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TransitionObservableBase_1 extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements 
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{
	/**
	 * @param \System\Double|double $progress
	 * @return \Avalonia\Animation\T
	 */
	protected  function ProduceValue($progress){}
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
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
}

<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LightweightSubject_1 extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1,
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1
{
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @param \Avalonia\Reactive\T $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
}

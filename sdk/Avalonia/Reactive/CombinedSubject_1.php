<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class CombinedSubject_1 extends \System\Object implements 
	\Avalonia\Reactive\IAvaloniaSubject_1,
	\System\IObserver_1,
	\System\IObservable_1
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
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

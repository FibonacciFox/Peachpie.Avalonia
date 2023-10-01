<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SingleSubscriberObservableBase_1 extends \System\Object implements 
	\System\IObservable_1,
	\System\IDisposable
{
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Unsubscribed(){}
	/**
	 * @param \Avalonia\Reactive\T $value
	 * @return \System\Void|void
	 */
	protected  function PublishNext($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function PublishCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected  function PublishError($error){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Subscribed(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

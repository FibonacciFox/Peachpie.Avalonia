<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LightweightObservableBase_1 extends \System\Object implements 
	\System\IObservable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasObservers(){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @return \System\IDisposable
	 */
	public  function Subscribe($observer){}
	/**
	 * @param \System\IObserver_1 $observer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Remove($observer){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Initialize(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Deinitialize(){}
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
	 * @param \System\IObserver_1 $observer
	 * @param \System\Boolean $first
	 * @return \System\Void|void
	 */
	protected  function Subscribed($observer, $first){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

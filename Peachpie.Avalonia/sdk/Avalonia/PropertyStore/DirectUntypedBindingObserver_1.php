<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class DirectUntypedBindingObserver_1 extends \System\Object implements 
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\DirectPropertyBase_1
	 */
	public  function get_Property(){}
	/**
	 * @param \System\IObservable_1 $source
	 * @return \System\Void|void
	 */
	public  function Start($source){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
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
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

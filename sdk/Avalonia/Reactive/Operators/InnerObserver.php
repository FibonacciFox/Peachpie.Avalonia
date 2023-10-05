<?php
namespace Avalonia\Reactive\Operators;
/**
 */
class InnerObserver extends \System\Object implements 
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @var \System\IDisposable
	 * @property
	 */
	public $Disposable;
	/**
	 * @return \System\IDisposable
	 */
	public  function get_Disposable(){}
	/**
	 * @param \System\IDisposable $value
	 * @return \System\Void|void
	 */
	public  function set_Disposable($value){}
	/**
	 * @param \Avalonia\Reactive\Operators\TSource $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Reactive;
/**
 */
class SerialDisposableValue extends \System\Object implements 
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
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

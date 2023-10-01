<?php
namespace Avalonia\Utilities;
/**
 */
class DisposableLock extends \System\Object
{
	/**
	 * @return \System\IDisposable
	 */
	public  function TryLock(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function Lock(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

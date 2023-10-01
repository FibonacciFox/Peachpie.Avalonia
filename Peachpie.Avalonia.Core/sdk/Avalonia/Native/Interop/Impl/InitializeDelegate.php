<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class InitializeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $deallocator
	 * @param \System\Void* $appCb
	 * @param \System\Void* $dispatcher
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $deallocator, $appCb, $dispatcher){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $deallocator
	 * @param \System\Void* $appCb
	 * @param \System\Void* $dispatcher
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $deallocator, $appCb, $dispatcher, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

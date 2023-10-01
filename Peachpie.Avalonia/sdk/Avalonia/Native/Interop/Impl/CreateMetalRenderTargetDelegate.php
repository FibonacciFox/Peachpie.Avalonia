<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class CreateMetalRenderTargetDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $device
	 * @param \System\Void** $ret
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $device, $ret){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $device
	 * @param \System\Void** $ret
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $device, $ret, $callback, $object){}
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

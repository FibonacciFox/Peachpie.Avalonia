<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class RootProvider_GetPeerFromPointDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @return \System\Void*
	 */
	public  function Invoke($this, $point){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $point, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void*
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

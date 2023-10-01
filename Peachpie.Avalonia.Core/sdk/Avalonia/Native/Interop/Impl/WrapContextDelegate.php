<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class WrapContextDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $native
	 * @param \System\Void** $ppv
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $native, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $native
	 * @param \System\Void** $ppv
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $native, $ppv, $callback, $object){}
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

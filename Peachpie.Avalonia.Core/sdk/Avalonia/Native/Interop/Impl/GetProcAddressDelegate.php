<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class GetProcAddressDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $proc
	 * @return \System\IntPtr
	 */
	public  function Invoke($this, $proc){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $proc
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $proc, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

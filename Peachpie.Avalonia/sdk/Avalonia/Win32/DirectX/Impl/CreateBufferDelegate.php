<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateBufferDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppBuffer
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc, $pInitialData, $ppBuffer){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppBuffer
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $pInitialData, $ppBuffer, $callback, $object){}
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

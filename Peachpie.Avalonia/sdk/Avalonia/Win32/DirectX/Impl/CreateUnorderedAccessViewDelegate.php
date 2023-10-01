<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateUnorderedAccessViewDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppUAView
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pResource, $pDesc, $ppUAView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppUAView
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pResource, $pDesc, $ppUAView, $callback, $object){}
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

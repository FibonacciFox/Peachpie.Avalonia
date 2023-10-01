<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateShaderResourceViewDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppSRView
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pResource, $pDesc, $ppSRView){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pResource
	 * @param \System\IntPtr $pDesc
	 * @param \System\Void** $ppSRView
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pResource, $pDesc, $ppSRView, $callback, $object){}
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

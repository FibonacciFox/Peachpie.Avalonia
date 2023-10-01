<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class OpenSharedResourceDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @param \System\Void** $ppResource
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $hResource, $ReturnedInterface, $ppResource){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hResource
	 * @param \System\Guid* $ReturnedInterface
	 * @param \System\Void** $ppResource
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $hResource, $ReturnedInterface, $ppResource, $callback, $object){}
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

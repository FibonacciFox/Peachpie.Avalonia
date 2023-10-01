<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class CreateCompositionSurfaceForHandleDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $swapChain
	 * @param \System\Void** $res
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $swapChain, $res){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $swapChain
	 * @param \System\Void** $res
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $swapChain, $res, $callback, $object){}
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

<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class CreateDesktopWindowTargetDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hwndTarget
	 * @param \System\Int32|int $isTopmost
	 * @param \System\Void** $result
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $hwndTarget, $isTopmost, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hwndTarget
	 * @param \System\Int32|int $isTopmost
	 * @param \System\Void** $result
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $hwndTarget, $isTopmost, $result, $callback, $object){}
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

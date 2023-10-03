<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class ResizeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\POINT $sizePixels
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $sizePixels){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\POINT $sizePixels
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $sizePixels, $callback, $object){}
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

<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class ScrollDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $scrollRect
	 * @param \Avalonia\Win32\Interop\RECT* $clipRect
	 * @param \System\Int32|int $offsetX
	 * @param \System\Int32|int $offsetY
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $scrollRect, $clipRect, $offsetX, $offsetY){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\RECT* $scrollRect
	 * @param \Avalonia\Win32\Interop\RECT* $clipRect
	 * @param \System\Int32|int $offsetX
	 * @param \System\Int32|int $offsetY
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $scrollRect, $clipRect, $offsetX, $offsetY, $callback, $object){}
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

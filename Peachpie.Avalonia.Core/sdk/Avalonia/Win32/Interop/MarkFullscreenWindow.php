<?php
namespace Avalonia\Win32\Interop;
/**
 */
class MarkFullscreenWindow extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $This
	 * @param \System\IntPtr $hwnd
	 * @param \System\Boolean $fullscreen
	 * @return \System\Void|void
	 */
	public  function Invoke($This, $hwnd, $fullscreen){}
	/**
	 * @param \System\IntPtr $This
	 * @param \System\IntPtr $hwnd
	 * @param \System\Boolean $fullscreen
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($This, $hwnd, $fullscreen, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

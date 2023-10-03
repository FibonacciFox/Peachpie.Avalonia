<?php
namespace Avalonia\X11;
/**
 */
class XErrorHandler extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $DisplayHandle
	 * @param \Avalonia\X11\XErrorEvent& $error_event
	 * @return \System\Int32|int
	 */
	public  function Invoke($DisplayHandle, $error_event){}
	/**
	 * @param \System\IntPtr $DisplayHandle
	 * @param \Avalonia\X11\XErrorEvent& $error_event
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($DisplayHandle, $error_event, $callback, $object){}
	/**
	 * @param \Avalonia\X11\XErrorEvent& $error_event
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($error_event, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

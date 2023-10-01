<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
class signal_dialog_response extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @param \Avalonia\X11\NativeDialogs\GtkResponseType $response
	 * @param \System\IntPtr $userData
	 * @return \System\Boolean
	 */
	public  function Invoke($gtkWidget, $response, $userData){}
	/**
	 * @param \System\IntPtr $gtkWidget
	 * @param \Avalonia\X11\NativeDialogs\GtkResponseType $response
	 * @param \System\IntPtr $userData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($gtkWidget, $response, $userData, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

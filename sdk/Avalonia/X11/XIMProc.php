<?php
namespace Avalonia\X11;
/**
 */
class XIMProc extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $xim
	 * @param \System\IntPtr $clientData
	 * @param \System\IntPtr $callData
	 * @return \System\Int32|int
	 */
	public  function Invoke($xim, $clientData, $callData){}
	/**
	 * @param \System\IntPtr $xim
	 * @param \System\IntPtr $clientData
	 * @param \System\IntPtr $callData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($xim, $clientData, $callData, $callback, $object){}
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

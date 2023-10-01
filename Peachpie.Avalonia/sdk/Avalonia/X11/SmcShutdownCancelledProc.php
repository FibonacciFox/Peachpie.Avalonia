<?php
namespace Avalonia\X11;
/**
 */
class SmcShutdownCancelledProc extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @return \System\Void|void
	 */
	public  function Invoke($smcConn, $clientData){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($smcConn, $clientData, $callback, $object){}
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

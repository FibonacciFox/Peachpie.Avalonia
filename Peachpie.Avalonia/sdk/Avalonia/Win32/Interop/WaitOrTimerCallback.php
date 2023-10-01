<?php
namespace Avalonia\Win32\Interop;
/**
 */
class WaitOrTimerCallback extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $lpParameter
	 * @param \System\Boolean $timerOrWaitFired
	 * @return \System\Void|void
	 */
	public  function Invoke($lpParameter, $timerOrWaitFired){}
	/**
	 * @param \System\IntPtr $lpParameter
	 * @param \System\Boolean $timerOrWaitFired
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($lpParameter, $timerOrWaitFired, $callback, $object){}
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

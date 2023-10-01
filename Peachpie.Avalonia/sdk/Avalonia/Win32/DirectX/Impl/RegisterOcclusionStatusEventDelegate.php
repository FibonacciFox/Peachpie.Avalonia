<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class RegisterOcclusionStatusEventDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hEvent
	 * @param \System\Int32* $pdwCookie
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $hEvent, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $hEvent
	 * @param \System\Int32* $pdwCookie
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $hEvent, $pdwCookie, $callback, $object){}
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

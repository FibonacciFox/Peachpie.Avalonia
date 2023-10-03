<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class InvokeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $asyncInfo
	 * @param \Avalonia\Win32\WinRT\AsyncStatus $asyncStatus
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $asyncInfo, $asyncStatus){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $asyncInfo
	 * @param \Avalonia\Win32\WinRT\AsyncStatus $asyncStatus
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $asyncInfo, $asyncStatus, $callback, $object){}
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
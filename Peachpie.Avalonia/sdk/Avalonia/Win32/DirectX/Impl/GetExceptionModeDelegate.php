<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetExceptionModeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @return \System\UInt16
	 */
	public  function Invoke($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\UInt16
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class AcquireSyncDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $Key
	 * @param \System\UInt32 $dwMilliseconds
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Key, $dwMilliseconds){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $Key
	 * @param \System\UInt32 $dwMilliseconds
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Key, $dwMilliseconds, $callback, $object){}
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

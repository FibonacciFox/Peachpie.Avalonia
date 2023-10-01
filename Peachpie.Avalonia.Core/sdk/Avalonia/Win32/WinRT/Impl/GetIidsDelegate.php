<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetIidsDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64* $iidCount
	 * @param \System\Guid** $iids
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $iidCount, $iids){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64* $iidCount
	 * @param \System\Guid** $iids
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $iidCount, $iids, $callback, $object){}
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

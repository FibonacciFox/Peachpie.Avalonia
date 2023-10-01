<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class GetStringsDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void** $ppv
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $type, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void** $ppv
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $type, $ppv, $callback, $object){}
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

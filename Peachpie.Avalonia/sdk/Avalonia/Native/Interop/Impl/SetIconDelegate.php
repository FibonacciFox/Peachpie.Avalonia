<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetIconDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $data, $length){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $data
	 * @param \System\IntPtr $length
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $data, $length, $callback, $object){}
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

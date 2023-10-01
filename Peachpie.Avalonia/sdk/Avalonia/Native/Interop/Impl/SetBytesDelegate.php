<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetBytesDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void* $utf8Text
	 * @param \System\Int32|int $len
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $type, $utf8Text, $len){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Void* $utf8Text
	 * @param \System\Int32|int $len
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $type, $utf8Text, $len, $callback, $object){}
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

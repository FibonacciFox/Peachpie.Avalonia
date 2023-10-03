<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class RawTextInputEventDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $timeStamp
	 * @param \System\Byte* $text
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $timeStamp, $text){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $timeStamp
	 * @param \System\Byte* $text
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $timeStamp, $text, $callback, $object){}
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

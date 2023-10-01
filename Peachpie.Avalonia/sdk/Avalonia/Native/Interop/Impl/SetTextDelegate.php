<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetTextDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Byte* $utf8Text
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $type, $utf8Text){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $type
	 * @param \System\Byte* $utf8Text
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $type, $utf8Text, $callback, $object){}
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

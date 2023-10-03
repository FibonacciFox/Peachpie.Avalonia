<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SelectInSurroundingTextDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $start, $length){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $start, $length, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

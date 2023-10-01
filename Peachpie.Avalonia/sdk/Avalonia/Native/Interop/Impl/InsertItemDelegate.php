<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class InsertItemDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $index
	 * @param \System\Void* $item
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $index, $item){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $index
	 * @param \System\Void* $item
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $index, $item, $callback, $object){}
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

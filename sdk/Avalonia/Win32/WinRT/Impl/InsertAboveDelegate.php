<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class InsertAboveDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @param \System\Void* $sibling
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $newChild, $sibling){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $newChild
	 * @param \System\Void* $sibling
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $newChild, $sibling, $callback, $object){}
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

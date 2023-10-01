<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetActionDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $predicate
	 * @param \System\Void* $callback
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $predicate, $callback){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $predicate
	 * @param \System\Void* $callback
	 * @param \System\AsyncCallback $__callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $predicate, $callback, $__callback, $object){}
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

<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetMinMaxSizeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize $minSize
	 * @param \Avalonia\Native\Interop\AvnSize $maxSize
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $minSize, $maxSize){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize $minSize
	 * @param \Avalonia\Native\Interop\AvnSize $maxSize
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $minSize, $maxSize, $callback, $object){}
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

<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class BeginDragAndDropOperationDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \System\Void* $clipboard
	 * @param \System\Void* $cb
	 * @param \System\IntPtr $sourceHandle
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $effects, $point, $clipboard, $cb, $sourceHandle){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \System\Void* $clipboard
	 * @param \System\Void* $cb
	 * @param \System\IntPtr $sourceHandle
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $effects, $point, $clipboard, $cb, $sourceHandle, $callback, $object){}
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

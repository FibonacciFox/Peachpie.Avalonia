<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class DragEventDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragEventType $type
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \System\Void* $clipboard
	 * @param \System\IntPtr $dataObjectHandle
	 * @return \Avalonia\Native\Interop\AvnDragDropEffects
	 */
	public  function Invoke($this, $type, $position, $modifiers, $effects, $clipboard, $dataObjectHandle){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragEventType $type
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \System\Void* $clipboard
	 * @param \System\IntPtr $dataObjectHandle
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $type, $position, $modifiers, $effects, $clipboard, $dataObjectHandle, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \Avalonia\Native\Interop\AvnDragDropEffects
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

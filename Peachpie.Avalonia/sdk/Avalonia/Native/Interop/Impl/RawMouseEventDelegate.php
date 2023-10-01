<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class RawMouseEventDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $type, $timeStamp, $modifiers, $point, $delta){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $type, $timeStamp, $modifiers, $point, $delta, $callback, $object){}
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

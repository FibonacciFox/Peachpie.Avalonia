<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class GetCursorDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnStandardCursorType $cursorType
	 * @param \System\Void** $retOut
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $cursorType, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnStandardCursorType $cursorType
	 * @param \System\Void** $retOut
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $cursorType, $retOut, $callback, $object){}
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

<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class CreateDefaultChildDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $parent
	 * @param \System\IntPtr* $retOut
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $parent, $retOut){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $parent
	 * @param \System\IntPtr* $retOut
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $parent, $retOut, $callback, $object){}
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

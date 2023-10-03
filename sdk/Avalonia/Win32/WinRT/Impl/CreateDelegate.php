<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class CreateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\Void** $instance
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $name, $instance){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\Void** $instance
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $name, $instance, $callback, $object){}
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

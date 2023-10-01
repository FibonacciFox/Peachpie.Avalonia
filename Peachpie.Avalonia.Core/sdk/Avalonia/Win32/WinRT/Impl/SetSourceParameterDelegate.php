<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class SetSourceParameterDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\Void* $source
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $name, $source){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\Void* $source
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $name, $source, $callback, $object){}
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

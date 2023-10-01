<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetBorderModeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\CompositionBorderMode* $value
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\CompositionBorderMode* $value
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $value, $callback, $object){}
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

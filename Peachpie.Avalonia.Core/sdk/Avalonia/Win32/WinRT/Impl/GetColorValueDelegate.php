<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetColorValueDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\UIColorType $desiredColor
	 * @param \Avalonia\Win32\WinRT\WinRTColor* $value
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $desiredColor, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\UIColorType $desiredColor
	 * @param \Avalonia\Win32\WinRT\WinRTColor* $value
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $desiredColor, $value, $callback, $object){}
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

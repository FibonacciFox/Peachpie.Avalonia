<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class GetPlatformThemeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @return \Avalonia\Native\Interop\AvnPlatformThemeVariant
	 */
	public  function Invoke($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \Avalonia\Native\Interop\AvnPlatformThemeVariant
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
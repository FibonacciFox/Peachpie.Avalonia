<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetNamedPropertyMappingDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\UInt32* $index
	 * @param \Avalonia\Win32\WinRT\GRAPHICS_EFFECT_PROPERTY_MAPPING* $mapping
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $name, $index, $mapping){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $name
	 * @param \System\UInt32* $index
	 * @param \Avalonia\Win32\WinRT\GRAPHICS_EFFECT_PROPERTY_MAPPING* $mapping
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $name, $index, $mapping, $callback, $object){}
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

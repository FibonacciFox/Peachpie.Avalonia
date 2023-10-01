<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CheckInterfaceSupportDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $InterfaceName
	 * @param \System\UInt64* $pUMDVersion
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $InterfaceName, $pUMDVersion){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $InterfaceName
	 * @param \System\UInt64* $pUMDVersion
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $InterfaceName, $pUMDVersion, $callback, $object){}
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

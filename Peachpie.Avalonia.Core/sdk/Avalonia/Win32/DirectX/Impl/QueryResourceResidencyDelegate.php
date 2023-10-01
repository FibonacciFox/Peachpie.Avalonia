<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class QueryResourceResidencyDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $ppResources
	 * @param \Avalonia\Win32\DirectX\DXGI_RESIDENCY* $pResidencyStatus
	 * @param \System\UInt16 $NumResources
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $ppResources, $pResidencyStatus, $NumResources){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $ppResources
	 * @param \Avalonia\Win32\DirectX\DXGI_RESIDENCY* $pResidencyStatus
	 * @param \System\UInt16 $NumResources
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $ppResources, $pResidencyStatus, $NumResources, $callback, $object){}
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

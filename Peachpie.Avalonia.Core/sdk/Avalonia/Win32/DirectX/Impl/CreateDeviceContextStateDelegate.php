<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateDeviceContextStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Flags
	 * @param \System\Void* $pFeatureLevels
	 * @param \System\UInt16 $FeatureLevels
	 * @param \System\UInt16 $SDKVersion
	 * @param \System\Guid* $EmulatedInterface
	 * @param \System\Void* $pChosenFeatureLevel
	 * @param \System\Void** $ppContextState
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $EmulatedInterface, $pChosenFeatureLevel, $ppContextState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Flags
	 * @param \System\Void* $pFeatureLevels
	 * @param \System\UInt16 $FeatureLevels
	 * @param \System\UInt16 $SDKVersion
	 * @param \System\Guid* $EmulatedInterface
	 * @param \System\Void* $pChosenFeatureLevel
	 * @param \System\Void** $ppContextState
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Flags, $pFeatureLevels, $FeatureLevels, $SDKVersion, $EmulatedInterface, $pChosenFeatureLevel, $ppContextState, $callback, $object){}
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

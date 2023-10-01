<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class Present1Delegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $PresentFlags
	 * @param \Avalonia\Win32\DirectX\DXGI_PRESENT_PARAMETERS* $pPresentParameters
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $SyncInterval, $PresentFlags, $pPresentParameters){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $SyncInterval
	 * @param \System\UInt16 $PresentFlags
	 * @param \Avalonia\Win32\DirectX\DXGI_PRESENT_PARAMETERS* $pPresentParameters
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $SyncInterval, $PresentFlags, $pPresentParameters, $callback, $object){}
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

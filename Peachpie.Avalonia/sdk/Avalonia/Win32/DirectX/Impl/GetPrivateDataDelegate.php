<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetPrivateDataDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void* $pData
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $guid, $pDataSize, $pData){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $guid
	 * @param \System\UInt16* $pDataSize
	 * @param \System\Void* $pData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $guid, $pDataSize, $pData, $callback, $object){}
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

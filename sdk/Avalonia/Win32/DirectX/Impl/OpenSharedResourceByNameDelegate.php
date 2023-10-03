<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class OpenSharedResourceByNameDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $lpName
	 * @param \System\Int32|int $dwDesiredAccess
	 * @param \System\Guid* $returnedInterface
	 * @param \System\Void** $ppResource
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $lpName, $dwDesiredAccess, $returnedInterface, $ppResource){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $lpName
	 * @param \System\Int32|int $dwDesiredAccess
	 * @param \System\Guid* $returnedInterface
	 * @param \System\Void** $ppResource
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $lpName, $dwDesiredAccess, $returnedInterface, $ppResource, $callback, $object){}
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

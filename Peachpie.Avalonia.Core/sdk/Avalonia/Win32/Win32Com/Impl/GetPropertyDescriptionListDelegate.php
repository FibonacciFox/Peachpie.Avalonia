<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class GetPropertyDescriptionListDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $keyType
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppv
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $keyType, $riid, $ppv){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $keyType
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppv
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $keyType, $riid, $ppv, $callback, $object){}
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

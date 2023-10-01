<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetBufferDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Buffer
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppSurface
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Buffer, $riid, $ppSurface){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $Buffer
	 * @param \System\Guid* $riid
	 * @param \System\Void** $ppSurface
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Buffer, $riid, $ppSurface, $callback, $object){}
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

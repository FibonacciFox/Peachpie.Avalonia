<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class MapDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MAPPED_RECT* $pLockedRect
	 * @param \System\UInt16 $MapFlags
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pLockedRect, $MapFlags){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MAPPED_RECT* $pLockedRect
	 * @param \System\UInt16 $MapFlags
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pLockedRect, $MapFlags, $callback, $object){}
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

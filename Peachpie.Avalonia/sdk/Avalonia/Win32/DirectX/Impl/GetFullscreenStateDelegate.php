<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetFullscreenStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $pFullscreen
	 * @param \System\Void** $ppTarget
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pFullscreen, $ppTarget){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $pFullscreen
	 * @param \System\Void** $ppTarget
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pFullscreen, $ppTarget, $callback, $object){}
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

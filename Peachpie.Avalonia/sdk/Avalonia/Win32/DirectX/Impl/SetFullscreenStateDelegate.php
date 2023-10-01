<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class SetFullscreenStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $Fullscreen
	 * @param \System\Void* $pTarget
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Fullscreen, $pTarget){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $Fullscreen
	 * @param \System\Void* $pTarget
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Fullscreen, $pTarget, $callback, $object){}
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

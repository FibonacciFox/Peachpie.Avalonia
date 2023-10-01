<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class HideWithSizeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $width, $height){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Single $width
	 * @param \System\Single $height
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $width, $height, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

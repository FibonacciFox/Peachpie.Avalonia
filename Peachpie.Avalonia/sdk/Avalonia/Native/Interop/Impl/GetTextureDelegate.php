<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class GetTextureDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @return \System\IntPtr
	 */
	public  function Invoke($this){}
	/**
	 * @param \System\Void* $this
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

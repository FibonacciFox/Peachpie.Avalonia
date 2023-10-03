<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class ShowDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $activate
	 * @param \System\Int32|int $isDialog
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $activate, $isDialog){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $activate
	 * @param \System\Int32|int $isDialog
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $activate, $isDialog, $callback, $object){}
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

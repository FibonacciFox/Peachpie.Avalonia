<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class AddPlaceDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @param \System\Int32|int $fdap
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $psi, $fdap){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $psi
	 * @param \System\Int32|int $fdap
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $psi, $fdap, $callback, $object){}
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

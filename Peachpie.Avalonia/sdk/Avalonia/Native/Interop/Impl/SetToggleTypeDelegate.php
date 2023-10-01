<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetToggleTypeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnMenuItemToggleType $toggleType
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $toggleType){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnMenuItemToggleType $toggleType
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $toggleType, $callback, $object){}
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

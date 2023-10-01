<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class SetFileTypesDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $cFileTypes
	 * @param \System\Void* $rgFilterSpec
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $cFileTypes, $rgFilterSpec){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $cFileTypes
	 * @param \System\Void* $rgFilterSpec
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $cFileTypes, $rgFilterSpec, $callback, $object){}
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

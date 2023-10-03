<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class GetDisplayNameDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $sigdnName
	 * @param \System\Char** $ppszName
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $sigdnName, $ppszName){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $sigdnName
	 * @param \System\Char** $ppszName
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $sigdnName, $ppszName, $callback, $object){}
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

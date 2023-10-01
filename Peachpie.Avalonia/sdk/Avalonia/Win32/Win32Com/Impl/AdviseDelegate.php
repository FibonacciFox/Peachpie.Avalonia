<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class AdviseDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pfde
	 * @param \System\Int32* $pdwCookie
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pfde, $pdwCookie){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pfde
	 * @param \System\Int32* $pdwCookie
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pfde, $pdwCookie, $callback, $object){}
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

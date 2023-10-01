<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetSourceDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $index
	 * @param \System\Void** $source
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $index, $source){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $index
	 * @param \System\Void** $source
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $index, $source, $callback, $object){}
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

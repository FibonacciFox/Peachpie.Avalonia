<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class NextDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $pceltFetched
	 * @return \System\UInt32
	 */
	public  function Invoke($this, $celt, $rgelt, $pceltFetched){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $pceltFetched
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $celt, $rgelt, $pceltFetched, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\UInt32
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

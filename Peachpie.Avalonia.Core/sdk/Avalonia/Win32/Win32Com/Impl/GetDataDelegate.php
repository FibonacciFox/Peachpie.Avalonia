<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class GetDataDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcIn
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @return \System\UInt32
	 */
	public  function Invoke($this, $pformatetcIn, $pmedium){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcIn
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pformatetcIn, $pmedium, $callback, $object){}
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

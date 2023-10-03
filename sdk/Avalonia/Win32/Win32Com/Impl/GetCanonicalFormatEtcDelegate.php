<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class GetCanonicalFormatEtcDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatectIn
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcOut
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pformatectIn, $pformatetcOut){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatectIn
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcOut
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pformatectIn, $pformatetcOut, $callback, $object){}
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

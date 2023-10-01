<?php
namespace Avalonia\Win32\Interop;
/**
 */
class HrInit extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $This
	 * @return \Avalonia\Win32\Interop\HRESULT
	 */
	public  function Invoke($This){}
	/**
	 * @param \System\IntPtr $This
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($This, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \Avalonia\Win32\Interop\HRESULT
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

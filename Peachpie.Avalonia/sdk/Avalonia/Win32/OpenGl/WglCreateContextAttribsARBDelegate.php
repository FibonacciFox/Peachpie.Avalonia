<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class WglCreateContextAttribsARBDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $hDC
	 * @param \System\IntPtr $hShareContext
	 * @param \System\Int32[] $attribList
	 * @return \System\IntPtr
	 */
	public  function Invoke($hDC, $hShareContext, $attribList){}
	/**
	 * @param \System\IntPtr $hDC
	 * @param \System\IntPtr $hShareContext
	 * @param \System\Int32[] $attribList
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($hDC, $hShareContext, $attribList, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

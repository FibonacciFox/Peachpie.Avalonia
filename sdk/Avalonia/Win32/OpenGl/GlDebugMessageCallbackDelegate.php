<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class GlDebugMessageCallbackDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $callback
	 * @param \System\IntPtr $userParam
	 * @return \System\Void|void
	 */
	public  function Invoke($callback, $userParam){}
	/**
	 * @param \System\IntPtr $callback
	 * @param \System\IntPtr $userParam
	 * @param \System\AsyncCallback $__callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($callback, $userParam, $__callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

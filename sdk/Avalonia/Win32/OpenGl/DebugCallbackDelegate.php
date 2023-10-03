<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class DebugCallbackDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Int32|int $source
	 * @param \System\Int32|int $type
	 * @param \System\Int32|int $id
	 * @param \System\Int32|int $severity
	 * @param \System\Int32|int $len
	 * @param \System\IntPtr $message
	 * @param \System\IntPtr $userParam
	 * @return \System\Void|void
	 */
	public  function Invoke($source, $type, $id, $severity, $len, $message, $userParam){}
	/**
	 * @param \System\Int32|int $source
	 * @param \System\Int32|int $type
	 * @param \System\Int32|int $id
	 * @param \System\Int32|int $severity
	 * @param \System\Int32|int $len
	 * @param \System\IntPtr $message
	 * @param \System\IntPtr $userParam
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($source, $type, $id, $severity, $len, $message, $userParam, $callback, $object){}
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

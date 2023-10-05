<?php
namespace Avalonia\X11;
/**
 */
class IceWatchProc extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_target;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_methodBase;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtr;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtrAux;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $Method;
	/**
	 * @param \System\IntPtr $iceConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Boolean $opening
	 * @param \System\IntPtr* $watchData
	 * @return \System\Void|void
	 */
	public  function Invoke($iceConn, $clientData, $opening, $watchData){}
	/**
	 * @param \System\IntPtr $iceConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Boolean $opening
	 * @param \System\IntPtr* $watchData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($iceConn, $clientData, $opening, $watchData, $callback, $object){}
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

<?php
namespace Avalonia\X11;
/**
 */
class SmcSaveYourselfProc extends \System\MulticastDelegate implements 
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
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Int32|int $saveType
	 * @param \System\Boolean $shutdown
	 * @param \System\Int32|int $interactStyle
	 * @param \System\Boolean $fast
	 * @return \System\Void|void
	 */
	public  function Invoke($smcConn, $clientData, $saveType, $shutdown, $interactStyle, $fast){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Int32|int $saveType
	 * @param \System\Boolean $shutdown
	 * @param \System\Int32|int $interactStyle
	 * @param \System\Boolean $fast
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($smcConn, $clientData, $saveType, $shutdown, $interactStyle, $fast, $callback, $object){}
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

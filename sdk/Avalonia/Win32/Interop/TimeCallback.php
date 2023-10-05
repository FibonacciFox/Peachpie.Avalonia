<?php
namespace Avalonia\Win32\Interop;
/**
 */
class TimeCallback extends \System\MulticastDelegate implements 
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
	 * @param \System\UInt32 $uTimerID
	 * @param \System\UInt32 $uMsg
	 * @param \System\UIntPtr $dwUser
	 * @param \System\UIntPtr $dw1
	 * @param \System\UIntPtr $dw2
	 * @return \System\Void|void
	 */
	public  function Invoke($uTimerID, $uMsg, $dwUser, $dw1, $dw2){}
	/**
	 * @param \System\UInt32 $uTimerID
	 * @param \System\UInt32 $uMsg
	 * @param \System\UIntPtr $dwUser
	 * @param \System\UIntPtr $dw1
	 * @param \System\UIntPtr $dw2
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($uTimerID, $uMsg, $dwUser, $dw1, $dw2, $callback, $object){}
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

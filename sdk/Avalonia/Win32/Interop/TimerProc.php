<?php
namespace Avalonia\Win32\Interop;
/**
 */
class TimerProc extends \System\MulticastDelegate implements 
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
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $uMsg
	 * @param \System\IntPtr $nIDEvent
	 * @param \System\UInt32 $dwTime
	 * @return \System\Void|void
	 */
	public  function Invoke($hWnd, $uMsg, $nIDEvent, $dwTime){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $uMsg
	 * @param \System\IntPtr $nIDEvent
	 * @param \System\UInt32 $dwTime
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($hWnd, $uMsg, $nIDEvent, $dwTime, $callback, $object){}
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

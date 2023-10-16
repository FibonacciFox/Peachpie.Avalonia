<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Action_6 extends \System\MulticastDelegate implements 
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
	 * @param \System\T1 $arg1
	 * @param \System\T2 $arg2
	 * @param \System\T3 $arg3
	 * @param \System\T4 $arg4
	 * @param \System\T5 $arg5
	 * @param \System\T6 $arg6
	 * @return \System\Void|void
	 */
	public  function Invoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6){}
	/**
	 * @param \System\T1 $arg1
	 * @param \System\T2 $arg2
	 * @param \System\T3 $arg3
	 * @param \System\T4 $arg4
	 * @param \System\T5 $arg5
	 * @param \System\T6 $arg6
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $callback, $object){}
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

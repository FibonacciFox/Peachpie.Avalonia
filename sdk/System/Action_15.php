<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Action_15 extends \System\MulticastDelegate implements 
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
	 * @param \System\T7 $arg7
	 * @param \System\T8 $arg8
	 * @param \System\T9 $arg9
	 * @param \System\T10 $arg10
	 * @param \System\T11 $arg11
	 * @param \System\T12 $arg12
	 * @param \System\T13 $arg13
	 * @param \System\T14 $arg14
	 * @param \System\T15 $arg15
	 * @return \System\Void|void
	 */
	public  function Invoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10, $arg11, $arg12, $arg13, $arg14, $arg15){}
	/**
	 * @param \System\T1 $arg1
	 * @param \System\T2 $arg2
	 * @param \System\T3 $arg3
	 * @param \System\T4 $arg4
	 * @param \System\T5 $arg5
	 * @param \System\T6 $arg6
	 * @param \System\T7 $arg7
	 * @param \System\T8 $arg8
	 * @param \System\T9 $arg9
	 * @param \System\T10 $arg10
	 * @param \System\T11 $arg11
	 * @param \System\T12 $arg12
	 * @param \System\T13 $arg13
	 * @param \System\T14 $arg14
	 * @param \System\T15 $arg15
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10, $arg11, $arg12, $arg13, $arg14, $arg15, $callback, $object){}
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

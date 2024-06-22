<?php
namespace System;
final class Func_16 extends \System\MulticastDelegate implements
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{

	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_target;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $_methodBase;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtr;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $_methodPtrAux;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Reflection\MethodInfo
	 * @since readonly
	 */
	public $Method;
	/**
	 * @param \T1 $arg1
	 * @param \T2 $arg2
	 * @param \T3 $arg3
	 * @param \T4 $arg4
	 * @param \T5 $arg5
	 * @param \T6 $arg6
	 * @param \T7 $arg7
	 * @param \T8 $arg8
	 * @param \T9 $arg9
	 * @param \T10 $arg10
	 * @param \T11 $arg11
	 * @param \T12 $arg12
	 * @param \T13 $arg13
	 * @param \T14 $arg14
	 * @param \T15 $arg15
	 * @return \TResult
	 */
	public function Invoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10, $arg11, $arg12, $arg13, $arg14, $arg15){}
	/**
	 * @param \T1 $arg1
	 * @param \T2 $arg2
	 * @param \T3 $arg3
	 * @param \T4 $arg4
	 * @param \T5 $arg5
	 * @param \T6 $arg6
	 * @param \T7 $arg7
	 * @param \T8 $arg8
	 * @param \T9 $arg9
	 * @param \T10 $arg10
	 * @param \T11 $arg11
	 * @param \T12 $arg12
	 * @param \T13 $arg13
	 * @param \T14 $arg14
	 * @param \T15 $arg15
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10, $arg11, $arg12, $arg13, $arg14, $arg15, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \TResult
	 */
	public function EndInvoke($result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
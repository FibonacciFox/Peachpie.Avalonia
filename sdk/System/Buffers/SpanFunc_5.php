<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SpanFunc_5 extends \System\MulticastDelegate implements 
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
	 * @param \System\Span_1 $span
	 * @param \System\Buffers\T1 $arg1
	 * @param \System\Buffers\T2 $arg2
	 * @param \System\Buffers\T3 $arg3
	 * @return \System\Buffers\TResult
	 */
	public  function Invoke($span, $arg1, $arg2, $arg3){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

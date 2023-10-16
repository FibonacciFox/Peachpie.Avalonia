<?php
namespace System\Runtime\InteropServices\ObjectiveC;
/**
 */
class UnhandledExceptionPropagationHandler extends \System\MulticastDelegate implements 
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
	 * @param \System\Exception $exception
	 * @param \System\RuntimeMethodHandle $lastMethod
	 * @param \System\IntPtr& $context
	 * @return \System\IntPtr
	 */
	public  function Invoke($exception, $lastMethod, $context){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\RuntimeMethodHandle $lastMethod
	 * @param \System\IntPtr& $context
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($exception, $lastMethod, $context, $callback, $object){}
	/**
	 * @param \System\IntPtr& $context
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public  function EndInvoke($context, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

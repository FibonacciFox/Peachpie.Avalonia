<?php
namespace System\Security\AccessControl;
/**
 */
class ExceptionFromErrorCode extends \System\MulticastDelegate implements 
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
	 * @param \System\Int32|int $errorCode
	 * @param \System\String|string $name
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @param \System\Object|object $context
	 * @return \System\Exception
	 */
	public  function Invoke($errorCode, $name, $handle, $context){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @param \System\String|string $name
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @param \System\Object|object $context
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($errorCode, $name, $handle, $context, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Exception
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

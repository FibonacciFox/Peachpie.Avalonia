<?php
namespace System\Runtime\InteropServices\ObjectiveC;
final class UnhandledExceptionPropagationHandler extends \System\MulticastDelegate implements
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
	 * @param \System\Exception $exception
	 * @param \System\RuntimeMethodHandle $lastMethod
	 * @param \System\IntPtr& &$context
	 * @return \System\IntPtr
	 */
	public function Invoke($exception, $lastMethod, &$context){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\RuntimeMethodHandle $lastMethod
	 * @param \System\IntPtr& &$context
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($exception, $lastMethod, &$context, $callback, $object){}
	/**
	 * @param \System\IntPtr& &$context
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public function EndInvoke(&$context, $result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
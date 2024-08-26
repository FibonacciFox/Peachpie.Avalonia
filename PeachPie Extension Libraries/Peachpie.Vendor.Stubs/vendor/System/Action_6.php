<?php
namespace System;
final class Action_5 extends \System\MulticastDelegate implements
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
	 * @return \System\Void|void
	 */
	public function Invoke($arg1, $arg2, $arg3, $arg4, $arg5){}
	/**
	 * @param \T1 $arg1
	 * @param \T2 $arg2
	 * @param \T3 $arg3
	 * @param \T4 $arg4
	 * @param \T5 $arg5
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($arg1, $arg2, $arg3, $arg4, $arg5, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public function EndInvoke($result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
<?php
namespace System;
final class Action_6 extends \System\MulticastDelegate implements
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
	 * @return \System\Void|void
	 */
	public function Invoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6){}
	/**
	 * @param \T1 $arg1
	 * @param \T2 $arg2
	 * @param \T3 $arg3
	 * @param \T4 $arg4
	 * @param \T5 $arg5
	 * @param \T6 $arg6
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public function EndInvoke($result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
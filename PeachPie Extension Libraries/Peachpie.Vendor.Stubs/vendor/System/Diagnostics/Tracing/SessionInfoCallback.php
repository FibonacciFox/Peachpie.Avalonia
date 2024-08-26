<?php
namespace System\Diagnostics\Tracing;
final class SessionInfoCallback extends \System\MulticastDelegate implements
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
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \System\Collections\Generic\List_1 $sessionList [generic: System\Diagnostics\Tracing\EventProvider+SessionInfo]
	 * @return \System\Void|void
	 */
	public function Invoke($etwSessionId, $matchAllKeywords, $sessionList){}
	/**
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \System\Collections\Generic\List_1 $sessionList [generic: System\Diagnostics\Tracing\EventProvider+SessionInfo]
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($etwSessionId, $matchAllKeywords, $sessionList, $callback, $object){}
	/**
	 * @param \System\Collections\Generic\List_1 $sessionList [generic: System\Diagnostics\Tracing\EventProvider+SessionInfo]
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public function EndInvoke($sessionList, $result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
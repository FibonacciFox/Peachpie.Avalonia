<?php
namespace System\Diagnostics\Tracing;
/**
 */
class SessionInfoCallback extends \System\MulticastDelegate implements 
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
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \System\Collections\Generic\List_1& $sessionList
	 * @return \System\Void|void
	 */
	public  function Invoke($etwSessionId, $matchAllKeywords, $sessionList){}
	/**
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Int64|int $matchAllKeywords
	 * @param \System\Collections\Generic\List_1& $sessionList
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($etwSessionId, $matchAllKeywords, $sessionList, $callback, $object){}
	/**
	 * @param \System\Collections\Generic\List_1& $sessionList
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($sessionList, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

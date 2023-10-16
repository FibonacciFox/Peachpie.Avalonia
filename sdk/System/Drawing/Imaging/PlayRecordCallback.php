<?php
namespace System\Drawing\Imaging;
/**
 */
class PlayRecordCallback extends \System\MulticastDelegate implements 
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
	 * @param \System\Drawing\Imaging\EmfPlusRecordType $recordType
	 * @param \System\Int32|int $flags
	 * @param \System\Int32|int $dataSize
	 * @param \System\IntPtr $recordData
	 * @return \System\Void|void
	 */
	public  function Invoke($recordType, $flags, $dataSize, $recordData){}
	/**
	 * @param \System\Drawing\Imaging\EmfPlusRecordType $recordType
	 * @param \System\Int32|int $flags
	 * @param \System\Int32|int $dataSize
	 * @param \System\IntPtr $recordData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($recordType, $flags, $dataSize, $recordData, $callback, $object){}
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

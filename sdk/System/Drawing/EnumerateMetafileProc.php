<?php
namespace System\Drawing;
/**
 */
class EnumerateMetafileProc extends \System\MulticastDelegate implements 
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
	 * @param \System\IntPtr $data
	 * @param \System\Drawing\Imaging\PlayRecordCallback $callbackData
	 * @return \System\Boolean
	 */
	public  function Invoke($recordType, $flags, $dataSize, $data, $callbackData){}
	/**
	 * @param \System\Drawing\Imaging\EmfPlusRecordType $recordType
	 * @param \System\Int32|int $flags
	 * @param \System\Int32|int $dataSize
	 * @param \System\IntPtr $data
	 * @param \System\Drawing\Imaging\PlayRecordCallback $callbackData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($recordType, $flags, $dataSize, $data, $callbackData, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

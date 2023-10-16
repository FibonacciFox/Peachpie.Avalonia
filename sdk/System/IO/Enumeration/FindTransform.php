<?php
namespace System\IO\Enumeration;
/**
 */
class FindTransform extends \System\MulticastDelegate implements 
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
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\IO\Enumeration\TResult
	 */
	public  function Invoke($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($entry, $callback, $object){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \System\IAsyncResult $result
	 * @return \System\IO\Enumeration\TResult
	 */
	public  function EndInvoke($entry, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

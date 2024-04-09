<?php
namespace System\IO\Enumeration;
final class FindPredicate extends \System\MulticastDelegate implements
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
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @return \System\Boolean|bool
	 */
	public function Invoke($entry){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($entry, $callback, $object){}
	/**
	 * @param \System\IO\Enumeration\FileSystemEntry& $entry
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean|bool
	 */
	public function EndInvoke($entry, $result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
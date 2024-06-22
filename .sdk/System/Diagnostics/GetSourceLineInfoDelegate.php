<?php
namespace System\Diagnostics;
final class GetSourceLineInfoDelegate extends \System\MulticastDelegate implements
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
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String|string $assemblyPath
	 * @param \System\IntPtr $loadedPeAddress
	 * @param \System\Int32|int $loadedPeSize
	 * @param \System\Boolean|bool $isFileLayout
	 * @param \System\IntPtr $inMemoryPdbAddress
	 * @param \System\Int32|int $inMemoryPdbSize
	 * @param \System\Int32|int $methodToken
	 * @param \System\Int32|int $ilOffset
	 * @param \System\String& &$sourceFile
	 * @param \System\Int32& &$sourceLine
	 * @param \System\Int32& &$sourceColumn
	 * @return \System\Void|void
	 */
	public function Invoke($assembly, $assemblyPath, $loadedPeAddress, $loadedPeSize, $isFileLayout, $inMemoryPdbAddress, $inMemoryPdbSize, $methodToken, $ilOffset, &$sourceFile, &$sourceLine, &$sourceColumn){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
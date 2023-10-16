<?php
namespace System\Diagnostics;
/**
 */
class GetSourceLineInfoDelegate extends \System\MulticastDelegate implements 
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
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\String|string $assemblyPath
	 * @param \System\IntPtr $loadedPeAddress
	 * @param \System\Int32|int $loadedPeSize
	 * @param \System\Boolean $isFileLayout
	 * @param \System\IntPtr $inMemoryPdbAddress
	 * @param \System\Int32|int $inMemoryPdbSize
	 * @param \System\Int32|int $methodToken
	 * @param \System\Int32|int $ilOffset
	 * @param \System\String& $sourceFile
	 * @param \System\Int32& $sourceLine
	 * @param \System\Int32& $sourceColumn
	 * @return \System\Void|void
	 */
	public  function Invoke($assembly, $assemblyPath, $loadedPeAddress, $loadedPeSize, $isFileLayout, $inMemoryPdbAddress, $inMemoryPdbSize, $methodToken, $ilOffset, $sourceFile, $sourceLine, $sourceColumn){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}

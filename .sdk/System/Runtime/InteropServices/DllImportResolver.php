<?php
namespace System\Runtime\InteropServices;
final class DllImportResolver extends \System\MulticastDelegate implements
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
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath [generic: System\Runtime\InteropServices\DllImportSearchPath]
	 * @return \System\IntPtr
	 */
	public function Invoke($libraryName, $assembly, $searchPath){}
	/**
	 * @param \System\String|string $libraryName
	 * @param \System\Reflection\Assembly $assembly
	 * @param \System\Nullable_1 $searchPath [generic: System\Runtime\InteropServices\DllImportSearchPath]
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($libraryName, $assembly, $searchPath, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public function EndInvoke($result){}
	/**
	 * @param \System\Object|object $object
	 * @param \System\IntPtr $method
	 */
	public function __construct($object, $method){}
}
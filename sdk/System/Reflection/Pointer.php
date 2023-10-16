<?php
namespace System\Reflection;
/**
 */
class Pointer extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $ptr
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public static function Box($ptr, $type){}
	/**
	 * @param \System\Object|object $ptr
	 * @return \System\Void*
	 */
	public static function Unbox($ptr){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetPointerType(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function GetPointerValue(){}
}

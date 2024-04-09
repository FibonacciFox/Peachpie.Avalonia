<?php
namespace System\Reflection;
final class Pointer extends \System\Object implements
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
	private function GetObjectData($info, $context){}
	/**
	 * @return \System\RuntimeType
	 */
	protected function GetPointerType(){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetPointerValue(){}
}
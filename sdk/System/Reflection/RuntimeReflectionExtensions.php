<?php
namespace System\Reflection;
/**
 */
class RuntimeReflectionExtensions extends \System\Object
{
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetRuntimeFields($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetRuntimeMethods($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetRuntimeProperties($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetRuntimeEvents($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\Reflection\FieldInfo
	 */
	public static function GetRuntimeField($type, $name){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @param \System\Type[] $parameters
	 * @return \System\Reflection\MethodInfo
	 */
	public static function GetRuntimeMethod($type, $name, $parameters){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\Reflection\PropertyInfo
	 */
	public static function GetRuntimeProperty($type, $name){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\Reflection\EventInfo
	 */
	public static function GetRuntimeEvent($type, $name){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Reflection\MethodInfo
	 */
	public static function GetRuntimeBaseDefinition($method){}
	/**
	 * @param \System\Reflection\TypeInfo $typeInfo
	 * @param \System\Type $interfaceType
	 * @return \System\Reflection\InterfaceMapping
	 */
	public static function GetRuntimeInterfaceMap($typeInfo, $interfaceType){}
	/**
	 * @param \System\Delegate $del
	 * @return \System\Reflection\MethodInfo
	 */
	public static function GetMethodInfo($del){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

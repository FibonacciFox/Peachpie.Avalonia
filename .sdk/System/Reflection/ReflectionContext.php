<?php
namespace System\Reflection;
class ReflectionContext extends \System\Object
{


	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Reflection\Assembly
	 */
	abstract public function MapAssembly($assembly);
	/**
	 * @param \System\Reflection\TypeInfo $type
	 * @return \System\Reflection\TypeInfo
	 */
	abstract public function MapType($type);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Reflection\TypeInfo
	 */
	public function GetTypeForObject($value){}
}
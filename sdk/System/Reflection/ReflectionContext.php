<?php
namespace System\Reflection;
/**
 */
class ReflectionContext extends \System\Object
{
	/**
	 * @param \System\Reflection\Assembly $assembly
	 * @return \System\Reflection\Assembly
	 */
	public  function MapAssembly($assembly){}
	/**
	 * @param \System\Reflection\TypeInfo $type
	 * @return \System\Reflection\TypeInfo
	 */
	public  function MapType($type){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Reflection\TypeInfo
	 */
	public  function GetTypeForObject($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

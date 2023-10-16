<?php
namespace System\Reflection;
/**
 */
class InterfaceMapping extends \System\ValueType
{
	/**
	 * @var \System\Type
	 * @field
	 */
	public $TargetType;
	/**
	 * @var \System\Type
	 * @field
	 */
	public $InterfaceType;
	/**
	 * @var \System\Reflection\MethodInfo[]
	 * @field
	 */
	public $TargetMethods;
	/**
	 * @var \System\Reflection\MethodInfo[]
	 * @field
	 */
	public $InterfaceMethods;
}

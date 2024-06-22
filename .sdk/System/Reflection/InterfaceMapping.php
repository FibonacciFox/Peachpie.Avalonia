<?php
namespace System\Reflection;
final class InterfaceMapping extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Type
	 */
	public $TargetType;
	/**
	 * @field
	 * @var \System\Type
	 */
	public $InterfaceType;
	/**
	 * @field
	 * @var \System\Reflection\MethodInfo[]
	 */
	public $TargetMethods;
	/**
	 * @field
	 * @var \System\Reflection\MethodInfo[]
	 */
	public $InterfaceMethods;

}
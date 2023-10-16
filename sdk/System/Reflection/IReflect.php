<?php
namespace System\Reflection;
/**
 */
interface IReflect
{
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetMethods($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetField($name, $bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetFields($bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetProperties($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetMember($name, $bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 */
	public function GetMembers($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $target
	 * @param \System\Object[] $args
	 * @param \System\Reflection\ParameterModifier[] $modifiers
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\String[] $namedParameters
	 */
	public function InvokeMember($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters);
	/**
	 */
	public function get_UnderlyingSystemType();
}

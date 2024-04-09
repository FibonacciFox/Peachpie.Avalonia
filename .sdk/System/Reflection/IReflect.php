<?php
namespace System\Reflection;
interface IReflect
{

	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodInfo
	 */
	public function GetMethod($name, $bindingAttr, $binder, $types, $modifiers);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MethodInfo
	 */
	public function GetMethod($name, $bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MethodInfo[]
	 */
	public function GetMethods($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\FieldInfo
	 */
	public function GetField($name, $bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\FieldInfo[]
	 */
	public function GetFields($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\PropertyInfo
	 */
	public function GetProperty($name, $bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Type $returnType
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	public function GetProperty($name, $bindingAttr, $binder, $returnType, $types, $modifiers);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\PropertyInfo[]
	 */
	public function GetProperties($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MemberInfo[]
	 */
	public function GetMember($name, $bindingAttr);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @return \System\Reflection\MemberInfo[]
	 */
	public function GetMembers($bindingAttr);
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $target
	 * @param \System\Object $args
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\String $namedParameters
	 * @return \System\Object|object
	 */
	public function InvokeMember($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters);
}
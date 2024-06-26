<?php
namespace System\Reflection;
class Binder extends \System\Object
{

	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\FieldInfo $match
	 * @param \System\Object|object $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Reflection\FieldInfo
	 */
	abstract public function BindToField($bindingAttr, $match, $value, $culture);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\MethodBase $match
	 * @param \System\Object $args
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\String $names
	 * @param \System\Object& &$state
	 * @return \System\Reflection\MethodBase
	 */
	abstract public function BindToMethod($bindingAttr, $match, $args, $modifiers, $culture, $names, &$state);
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	abstract public function ChangeType($value, $type, $culture);
	/**
	 * @param \System\Object $args
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	abstract public function ReorderArgumentArray($args, $state);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\MethodBase $match
	 * @param \System\Type $types
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\MethodBase
	 */
	abstract public function SelectMethod($bindingAttr, $match, $types, $modifiers);
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\PropertyInfo $match
	 * @param \System\Type $returnType
	 * @param \System\Type $indexes
	 * @param \System\Reflection\ParameterModifier $modifiers
	 * @return \System\Reflection\PropertyInfo
	 */
	abstract public function SelectProperty($bindingAttr, $match, $returnType, $indexes, $modifiers);
}
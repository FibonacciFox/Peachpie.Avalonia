<?php
namespace System;
final class TypedReference extends \System\ValueType
{


	/**
	 * @param \System\TypedReference &$value
	 * @return \System\Object|object
	 */
	public static function ToObject(&$value){}
	/**
	 * @param \System\Object|object $target
	 * @param \System\Reflection\FieldInfo $flds
	 * @return \System\TypedReference
	 */
	public static function MakeTypedReference($target, $flds){}
	private static function InternalMakeTypedReference($result, $target, $flds, $lastFieldType){}
	/**
	 * @param \System\TypedReference &$value
	 * @return \System\Type
	 */
	public static function GetTargetType(&$value){}
	/**
	 * @param \System\TypedReference &$value
	 * @return \System\RuntimeTypeHandle
	 */
	public static function TargetTypeToken(&$value){}
	/**
	 * @param \System\TypedReference &$target
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetTypedReference(&$target, $value){}
}
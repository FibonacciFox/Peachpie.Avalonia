<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PseudoCustomAttributeMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetCustomAttributes_1($type, $caType, $pcas){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetCustomAttributes_2($method, $caType, $pcas){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetCustomAttributes_3($parameter, $caType, $pcas){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function GetCustomAttributes_4($field, $caType, $pcas){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_1($type, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_2($method, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_3($parameter, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_4($field, $caType){}
	/**
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride] private static function GetMarshalAsCustomAttribute_1($parameter){}
	/**
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride] private static function GetMarshalAsCustomAttribute_2($field){}
	/**
	 * @return \System\Runtime\InteropServices\MarshalAsAttribute
	 */
	#[MethodOverride] private static function GetMarshalAsCustomAttribute_3($token, $scope){}
}
/**
 */
class PseudoCustomAttribute extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreatePseudoCustomAttributeHashSet(){}
	/**
	 * @uses PseudoCustomAttributeMethodsOverride::GetCustomAttributes_1 ($type, $caType, $pcas)
	 * @uses PseudoCustomAttributeMethodsOverride::GetCustomAttributes_2 ($method, $caType, $pcas)
	 * @uses PseudoCustomAttributeMethodsOverride::GetCustomAttributes_3 ($parameter, $caType, $pcas)
	 * @uses PseudoCustomAttributeMethodsOverride::GetCustomAttributes_4 ($field, $caType, $pcas)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses PseudoCustomAttributeMethodsOverride::IsDefined_1 ($type, $caType)
	 * @uses PseudoCustomAttributeMethodsOverride::IsDefined_2 ($method, $caType)
	 * @uses PseudoCustomAttributeMethodsOverride::IsDefined_3 ($parameter, $caType)
	 * @uses PseudoCustomAttributeMethodsOverride::IsDefined_4 ($field, $caType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDefined(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDllImportCustomAttribute($method){}
	/**
	 * @uses PseudoCustomAttributeMethodsOverride::GetMarshalAsCustomAttribute_1 ($parameter)
	 * @uses PseudoCustomAttributeMethodsOverride::GetMarshalAsCustomAttribute_2 ($field)
	 * @uses PseudoCustomAttributeMethodsOverride::GetMarshalAsCustomAttribute_3 ($token, $scope)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMarshalAsCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFieldOffsetCustomAttribute($field){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Runtime\InteropServices\StructLayoutAttribute
	 */
	protected static function GetStructLayoutCustomAttribute($type){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

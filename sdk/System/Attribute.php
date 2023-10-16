<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AttributeMethodsOverride
{
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] private static function InternalGetCustomAttributes_1($element, $type, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] private static function InternalGetCustomAttributes_2($element, $type, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function InternalIsDefined_1($element, $attributeType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function InternalIsDefined_2($element, $attributeType, $inherit){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] private static function GetParentDefinition_1($property, $propertyParameters){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] private static function GetParentDefinition_2($ev){}
	/**
	 * @return \System\Reflection\ParameterInfo
	 */
	#[MethodOverride] private static function GetParentDefinition_3($param){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_1($element, $attributeType){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_2($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_3($element){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_4($element, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_5($element){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_6($element, $attributeType){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_7($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_8($element, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_9($element, $attributeType){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_10($element){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_11($element, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_12($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_13($element, $attributeType){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_14($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_15($element){}
	/**
	 * @return \System\Attribute[]
	 */
	#[MethodOverride] public static function GetCustomAttributes_16($element, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_1($element, $attributeType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_2($element, $attributeType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_3($element, $attributeType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_4($element, $attributeType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_5($element, $attributeType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_6($element, $attributeType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_7($element, $attributeType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_8($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_1($element, $attributeType){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_2($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_3($element, $attributeType){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_4($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_5($element, $attributeType){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_6($element, $attributeType, $inherit){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_7($element, $attributeType){}
	/**
	 * @return \System\Attribute
	 */
	#[MethodOverride] public static function GetCustomAttribute_8($element, $attributeType, $inherit){}
}
/**
 */
class Attribute extends \System\Object
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @uses AttributeMethodsOverride::InternalGetCustomAttributes_1 ($element, $type, $inherit)
	 * @uses AttributeMethodsOverride::InternalGetCustomAttributes_2 ($element, $type, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InternalGetCustomAttributes(mixed ...$args){}
	/**
	 * @uses AttributeMethodsOverride::InternalIsDefined_1 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::InternalIsDefined_2 ($element, $attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InternalIsDefined(mixed ...$args){}
	/**
	 * @uses AttributeMethodsOverride::GetParentDefinition_1 ($property, $propertyParameters)
	 * @uses AttributeMethodsOverride::GetParentDefinition_2 ($ev)
	 * @uses AttributeMethodsOverride::GetParentDefinition_3 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetParentDefinition(mixed ...$args){}
	/**
	 * @param \System\Reflection\ParameterInfo $param
	 * @param \System\Type $type
	 * @param \System\Boolean $inherit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalParamGetCustomAttributes($param, $type, $inherit){}
	/**
	 * @param \System\Reflection\ParameterInfo $param
	 * @param \System\Type $type
	 * @param \System\Boolean $inherit
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalParamIsDefined($param, $type, $inherit){}
	/**
	 * @param \System\Collections\Generic\List_1 $attributeList
	 * @param \System\Attribute[] $attributes
	 * @param \System\Collections\Generic\Dictionary_2 $types
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopyToAttributeList($attributeList, $attributes, $types){}
	/**
	 * @param \System\Reflection\PropertyInfo $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIndexParameterTypes($element){}
	/**
	 * @param \System\Collections\Generic\List_1 $attributeList
	 * @param \System\Attribute[] $attributes
	 * @param \System\Collections\Generic\Dictionary_2 $types
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddAttributesToList($attributeList, $attributes, $types){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetAttributeUsage($type){}
	/**
	 * @param \System\Type $elementType
	 * @param \System\Int32|int $elementCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAttributeArrayHelper($elementType, $elementCount){}
	/**
	 * @uses AttributeMethodsOverride::GetCustomAttributes_1 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_2 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_3 ($element)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_4 ($element, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_5 ($element)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_6 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_7 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_8 ($element, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_9 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_10 ($element)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_11 ($element, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_12 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_13 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_14 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_15 ($element)
	 * @uses AttributeMethodsOverride::GetCustomAttributes_16 ($element, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses AttributeMethodsOverride::IsDefined_1 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::IsDefined_2 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::IsDefined_3 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::IsDefined_4 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::IsDefined_5 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::IsDefined_6 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::IsDefined_7 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::IsDefined_8 ($element, $attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDefined(mixed ...$args){}
	/**
	 * @uses AttributeMethodsOverride::GetCustomAttribute_1 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_2 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_3 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_4 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_5 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_6 ($element, $attributeType, $inherit)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_7 ($element, $attributeType)
	 * @uses AttributeMethodsOverride::GetCustomAttribute_8 ($element, $attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\Object|object $thisValue
	 * @param \System\Object|object $thatValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AreFieldValuesEqual($thisValue, $thatValue){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_TypeId(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Match($obj){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsDefaultAttribute(){}
}

<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NullabilityInfoContextMethodsOverride
{
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] public  function Create_1($parameterInfo){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] public  function Create_2($propertyInfo){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] public  function Create_3($eventInfo){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] public  function Create_4($fieldInfo){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] private  function GetNullabilityInfo_1($memberInfo, $type, $parser){}
	/**
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride] private  function GetNullabilityInfo_2($memberInfo, $type, $parser, $index){}
	/**
	 * @return \System\Reflection\NullabilityState
	 */
	#[MethodOverride] private static function TranslateByte_1($value){}
	/**
	 * @return \System\Reflection\NullabilityState
	 */
	#[MethodOverride] private static function TranslateByte_2($b){}
}
/**
 */
class NullabilityInfoContext extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsSupported(){}
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNullableContext($memberInfo){}
	/**
	 * @uses NullabilityInfoContextMethodsOverride::Create_1 ($parameterInfo)
	 * @uses NullabilityInfoContextMethodsOverride::Create_2 ($propertyInfo)
	 * @uses NullabilityInfoContextMethodsOverride::Create_3 ($eventInfo)
	 * @uses NullabilityInfoContextMethodsOverride::Create_4 ($fieldInfo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Create(mixed ...$args){}
	/**
	 * @param \System\Reflection\ParameterInfo $parameter
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckParameterMetadataType($parameter, $nullability){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMethodMetadataDefinition($method){}
	/**
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @param \System\Collections\Generic\IList_1 $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckNullabilityAttributes($nullability, $attributes){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsPrivateOrInternalMethodAndAnnotationDisabled($method){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureIsSupported(){}
	/**
	 * @param \System\Reflection\FieldInfo $fieldInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsPrivateOrInternalFieldAndAnnotationDisabled($fieldInfo){}
	/**
	 * @param \System\Boolean $isPrivate
	 * @param \System\Boolean $isFamilyAndAssembly
	 * @param \System\Boolean $isAssembly
	 * @param \System\Reflection\Module $module
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsPublicOnly($isPrivate, $isFamilyAndAssembly, $isAssembly, $module){}
	/**
	 * @param \System\Collections\Generic\IList_1 $customAttributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PopulateAnnotationInfo($customAttributes){}
	/**
	 * @uses NullabilityInfoContextMethodsOverride::GetNullabilityInfo_1 ($memberInfo, $type, $parser)
	 * @uses NullabilityInfoContextMethodsOverride::GetNullabilityInfo_2 ($memberInfo, $type, $parser, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNullabilityInfo(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IList_1 $customAttributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateParser($customAttributes){}
	/**
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryLoadGenericMetaTypeNullability($memberInfo, $nullability){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMemberMetadataDefinition($member){}
	/**
	 * @param \System\Reflection\PropertyInfo $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyMetaType($property){}
	/**
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @param \System\Reflection\MemberInfo $metaMember
	 * @param \System\Type $metaType
	 * @param \System\Type $reflectedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckGenericParameters($nullability, $metaMember, $metaType, $reflectedType){}
	/**
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @param \System\Type $genericParameter
	 * @param \System\Type $reflectedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryUpdateGenericParameterNullability($nullability, $genericParameter, $reflectedType){}
	/**
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @param \System\Type $genericParameter
	 * @param \System\Type $context
	 * @param \System\Type $reflectedType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryUpdateGenericTypeParameterNullabilityFromReflectedType($nullability, $genericParameter, $context, $reflectedType){}
	/**
	 * @param \System\Reflection\NullabilityInfo $nullability
	 * @param \System\Reflection\NullableAttributeStateParser $parser
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryPopulateNullabilityInfo($nullability, $parser, $index){}
	/**
	 * @uses NullabilityInfoContextMethodsOverride::TranslateByte_1 ($value)
	 * @uses NullabilityInfoContextMethodsOverride::TranslateByte_2 ($b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TranslateByte(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValueTypeOrValueTypeByRef($type){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

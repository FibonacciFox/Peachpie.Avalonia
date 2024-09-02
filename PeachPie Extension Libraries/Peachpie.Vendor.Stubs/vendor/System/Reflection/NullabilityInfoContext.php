<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NullabilityInfoContextOverride {
	/**
	 * @deprecated
	 * @param \System\Reflection\ParameterInfo $parameterInfo
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]public function Create_1 ($parameterInfo){}
	/**
	 * @deprecated
	 * @param \System\Reflection\PropertyInfo $propertyInfo
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]public function Create_2 ($propertyInfo){}
	/**
	 * @deprecated
	 * @param \System\Reflection\EventInfo $eventInfo
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]public function Create_3 ($eventInfo){}
	/**
	 * @deprecated
	 * @param \System\Reflection\FieldInfo $fieldInfo
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]public function Create_4 ($fieldInfo){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Type $type
	 * @param \System\Reflection\NullabilityInfoContext+NullableAttributeStateParser $parser
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]private function GetNullabilityInfo_1 ($memberInfo, $type, $parser){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MemberInfo $memberInfo
	 * @param \System\Type $type
	 * @param \System\Reflection\NullabilityInfoContext+NullableAttributeStateParser $parser
	 * @param \System\Int32& $index
	 * @return \System\Reflection\NullabilityInfo
	 */
	#[MethodOverride]private function GetNullabilityInfo_2 ($memberInfo, $type, $parser, $index){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Reflection\NullabilityState
	 */
	#[MethodOverride]private static function TranslateByte_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $b
	 * @return \System\Reflection\NullabilityState
	 */
	#[MethodOverride]private static function TranslateByte_2 ($b){}
}
final class NullabilityInfoContext extends \System\Object
{
	use NullabilityInfoContextOverride;

	private function GetNullableContext($memberInfo){}
	/**
	 * @uses NullabilityInfoContextOverride::Create_1 <br>public , args: ($parameterInfo)<br>
	 * @uses NullabilityInfoContextOverride::Create_2 <br>public , args: ($propertyInfo)<br>
	 * @uses NullabilityInfoContextOverride::Create_3 <br>public , args: ($eventInfo)<br>
	 * @uses NullabilityInfoContextOverride::Create_4 <br>public , args: ($fieldInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\NullabilityInfo|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	private function CheckParameterMetadataType($parameter, $nullability){}
	private static function GetMethodMetadataDefinition($method){}
	private static function CheckNullabilityAttributes($nullability, $attributes){}
	private function IsPrivateOrInternalMethodAndAnnotationDisabled($method){}
	private static function EnsureIsSupported(){}
	private function IsPrivateOrInternalFieldAndAnnotationDisabled($fieldInfo){}
	private function IsPublicOnly($isPrivate, $isFamilyAndAssembly, $isAssembly, $module){}
	private static function PopulateAnnotationInfo($customAttributes){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses NullabilityInfoContextOverride::GetNullabilityInfo_1 <br>private , args: ($memberInfo, $type, $parser)<br>
	 * @uses NullabilityInfoContextOverride::GetNullabilityInfo_2 <br>private , args: ($memberInfo, $type, $parser, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\NullabilityInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function GetNullabilityInfo (\override ...$args){}
	private static function CreateParser($customAttributes){}
	private function TryLoadGenericMetaTypeNullability($memberInfo, $nullability){}
	private static function GetMemberMetadataDefinition($member){}
	private static function GetPropertyMetaType($property){}
	private function CheckGenericParameters($nullability, $metaMember, $metaType, $reflectedType){}
	private function TryUpdateGenericParameterNullability($nullability, $genericParameter, $reflectedType){}
	private function TryUpdateGenericTypeParameterNullabilityFromReflectedType($nullability, $genericParameter, $context, $reflectedType){}
	private function TryPopulateNullabilityInfo($nullability, $parser, $index){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses NullabilityInfoContextOverride::TranslateByte_1 <br>private , args: ($value)<br>
	 * @uses NullabilityInfoContextOverride::TranslateByte_2 <br>private , args: ($b)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\NullabilityState|mixed|\override
	 */
	#[MethodOverridePrivate]function TranslateByte (\override ...$args){}
	private static function IsValueTypeOrValueTypeByRef($type){}
	/**
	 */
	public function __construct(){}
}
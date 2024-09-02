<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CustomAttributeOverride {
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $caType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_1 ($type, $caType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @param \System\RuntimeType $caType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_2 ($method, $caType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $ctor
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_3 ($ctor, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimePropertyInfo $property
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_4 ($property, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeEventInfo $e
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_5 ($e, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_6 ($field, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $parameter
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_7 ($parameter, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_8 ($assembly, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\RuntimeType $caType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function IsDefined_9 ($module, $caType){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $type
	 * @param \System\RuntimeType $caType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_1 ($type, $caType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @param \System\RuntimeType $caType
	 * @param \System\Boolean|bool $inherit
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_2 ($method, $caType, $inherit){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeConstructorInfo $ctor
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_3 ($ctor, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimePropertyInfo $property
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_4 ($property, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeEventInfo $e
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_5 ($e, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeFieldInfo $field
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_6 ($field, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeParameterInfo $parameter
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_7 ($parameter, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeAssembly $assembly
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_8 ($assembly, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\RuntimeType $caType
	 * @return \System\Object
	 */
	#[MethodOverride]protected static function GetCustomAttributes_9 ($module, $caType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $decoratedModule
	 * @param \System\Int32|int $decoratedMetadataToken
	 * @param \System\Int32|int $pcaCount
	 * @param \System\RuntimeType $attributeFilterType
	 * @return \System\Object
	 */
	#[MethodOverride]private static function GetCustomAttributes_10 ($decoratedModule, $decoratedMetadataToken, $pcaCount, $attributeFilterType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $decoratedModule
	 * @param \System\Int32|int $decoratedMetadataToken
	 * @param \System\RuntimeType $attributeFilterType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function IsCustomAttributeDefined_1 ($decoratedModule, $decoratedMetadataToken, $attributeFilterType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $decoratedModule
	 * @param \System\Int32|int $decoratedMetadataToken
	 * @param \System\RuntimeType $attributeFilterType
	 * @param \System\Int32|int $attributeCtorToken
	 * @param \System\Boolean|bool $mustBeInheritable
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function IsCustomAttributeDefined_2 ($decoratedModule, $decoratedMetadataToken, $attributeFilterType, $attributeCtorToken, $mustBeInheritable){}
}
class CustomAttribute extends \System\Object
{
	use CustomAttributeOverride;

	/**
	 * @uses CustomAttributeOverride::IsDefined_1 <br>protected , args: ($type, $caType, $inherit)<br>
	 * @uses CustomAttributeOverride::IsDefined_2 <br>protected , args: ($method, $caType, $inherit)<br>
	 * @uses CustomAttributeOverride::IsDefined_3 <br>protected , args: ($ctor, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_4 <br>protected , args: ($property, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_5 <br>protected , args: ($e, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_6 <br>protected , args: ($field, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_7 <br>protected , args: ($parameter, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_8 <br>protected , args: ($assembly, $caType)<br>
	 * @uses CustomAttributeOverride::IsDefined_9 <br>protected , args: ($module, $caType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function IsDefined (\override ...$args){}
	/**
	 * @uses CustomAttributeOverride::GetCustomAttributes_1 <br>protected , args: ($type, $caType, $inherit)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_2 <br>protected , args: ($method, $caType, $inherit)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_3 <br>protected , args: ($ctor, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_4 <br>protected , args: ($property, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_5 <br>protected , args: ($e, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_6 <br>protected , args: ($field, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_7 <br>protected , args: ($parameter, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_8 <br>protected , args: ($assembly, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_9 <br>protected , args: ($module, $caType)<br>
	 * @uses CustomAttributeOverride::GetCustomAttributes_10 <br>private , args: ($decoratedModule, $decoratedMetadataToken, $pcaCount, $attributeFilterType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|mixed|\override
	 */
	#[MethodOverrideProtected]function GetCustomAttributes (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses CustomAttributeOverride::IsCustomAttributeDefined_1 <br>private , args: ($decoratedModule, $decoratedMetadataToken, $attributeFilterType)<br>
	 * @uses CustomAttributeOverride::IsCustomAttributeDefined_2 <br>private , args: ($decoratedModule, $decoratedMetadataToken, $attributeFilterType, $attributeCtorToken, $mustBeInheritable)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function IsCustomAttributeDefined (\override ...$args){}
	private static function AddCustomAttributes($attributes, $decoratedModule, $decoratedMetadataToken, $attributeFilterType, $mustBeInheritable, $derivedAttributes){}
	private static function FilterCustomAttributeRecord($caCtorToken, &$scope, $decoratedModule, $decoratedToken, $attributeFilterType, $mustBeInheritable, $derivedAttributes, &$attributeType, &$ctorWithParameters, &$isVarArg){}
	private static function MatchesTypeFilter($attributeType, $attributeFilterType){}
	private static function AttributeUsageCheck($attributeType, $mustBeInheritable, $derivedAttributes){}
	/**
	 * @param \System\RuntimeType $decoratedAttribute
	 * @return \System\AttributeUsageAttribute
	 */
	protected static function GetAttributeUsage($decoratedAttribute){}
	/**
	 * @param \System\RuntimeType $caType
	 * @param \System\Int32|int $elementCount
	 * @return \System\Object[]|array
	 */
	protected static function CreateAttributeArrayHelper($caType, $elementCount){}
	private static function _ParseAttributeUsageAttribute($pCa, $cCa, &$targets, &$inherited, &$allowMultiple){}
	private static function ParseAttributeUsageAttribute($ca, &$targets, &$inherited, &$allowMultiple){}
	private static function _CreateCaObject($pModule, $type, $pCtor, $ppBlob, $pEndBlob, $pcNamedArgs){}
	private static function CreateCaObject($module, $type, $ctor, $blob, $blobEnd, &$namedArgs){}
	private static function _GetPropertyOrFieldData($pModule, $ppBlobStart, $pBlobEnd, &$name, &$bIsProperty, &$type, &$value){}
	private static function GetPropertyOrFieldData($module, $blobStart, $blobEnd, &$name, &$isProperty, &$type, &$value){}
}
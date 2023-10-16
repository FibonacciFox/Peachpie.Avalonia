<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CustomAttributeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_1($type, $caType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_2($method, $caType, $inherit){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_3($ctor, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_4($property, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_5($e, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_6($field, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_7($parameter, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_8($assembly, $caType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function IsDefined_9($module, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_1($type, $caType, $inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_2($method, $caType, $inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_3($ctor, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_4($property, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_5($e, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_6($field, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_7($parameter, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_8($assembly, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] protected static function GetCustomAttributes_9($module, $caType){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] private static function GetCustomAttributes_10($decoratedModule, $decoratedMetadataToken, $pcaCount, $attributeFilterType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function IsCustomAttributeDefined_1($decoratedModule, $decoratedMetadataToken, $attributeFilterType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function IsCustomAttributeDefined_2($decoratedModule, $decoratedMetadataToken, $attributeFilterType, $attributeCtorToken, $mustBeInheritable){}
}
/**
 */
class CustomAttribute extends \System\Object
{
	/**
	 * @uses CustomAttributeMethodsOverride::IsDefined_1 ($type, $caType, $inherit)
	 * @uses CustomAttributeMethodsOverride::IsDefined_2 ($method, $caType, $inherit)
	 * @uses CustomAttributeMethodsOverride::IsDefined_3 ($ctor, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_4 ($property, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_5 ($e, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_6 ($field, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_7 ($parameter, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_8 ($assembly, $caType)
	 * @uses CustomAttributeMethodsOverride::IsDefined_9 ($module, $caType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDefined(mixed ...$args){}
	/**
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_1 ($type, $caType, $inherit)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_2 ($method, $caType, $inherit)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_3 ($ctor, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_4 ($property, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_5 ($e, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_6 ($field, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_7 ($parameter, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_8 ($assembly, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_9 ($module, $caType)
	 * @uses CustomAttributeMethodsOverride::GetCustomAttributes_10 ($decoratedModule, $decoratedMetadataToken, $pcaCount, $attributeFilterType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses CustomAttributeMethodsOverride::IsCustomAttributeDefined_1 ($decoratedModule, $decoratedMetadataToken, $attributeFilterType)
	 * @uses CustomAttributeMethodsOverride::IsCustomAttributeDefined_2 ($decoratedModule, $decoratedMetadataToken, $attributeFilterType, $attributeCtorToken, $mustBeInheritable)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsCustomAttributeDefined(mixed ...$args){}
	/**
	 * @param \System\ListBuilder_1& $attributes
	 * @param \System\Reflection\RuntimeModule $decoratedModule
	 * @param \System\Int32|int $decoratedMetadataToken
	 * @param \System\RuntimeType $attributeFilterType
	 * @param \System\Boolean $mustBeInheritable
	 * @param \System\ListBuilder_1 $derivedAttributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddCustomAttributes($attributes, $decoratedModule, $decoratedMetadataToken, $attributeFilterType, $mustBeInheritable, $derivedAttributes){}
	/**
	 * @param \System\Reflection\MetadataToken $caCtorToken
	 * @param \System\Reflection\MetadataImport& $scope
	 * @param \System\Reflection\RuntimeModule $decoratedModule
	 * @param \System\Reflection\MetadataToken $decoratedToken
	 * @param \System\RuntimeType $attributeFilterType
	 * @param \System\Boolean $mustBeInheritable
	 * @param \System\ListBuilder_1& $derivedAttributes
	 * @param \System\RuntimeType& $attributeType
	 * @param \System\IRuntimeMethodInfo& $ctorWithParameters
	 * @param \System\Boolean& $isVarArg
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FilterCustomAttributeRecord($caCtorToken, $scope, $decoratedModule, $decoratedToken, $attributeFilterType, $mustBeInheritable, $derivedAttributes, $attributeType, $ctorWithParameters, $isVarArg){}
	/**
	 * @param \System\RuntimeType $attributeType
	 * @param \System\RuntimeType $attributeFilterType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MatchesTypeFilter($attributeType, $attributeFilterType){}
	/**
	 * @param \System\RuntimeType $attributeType
	 * @param \System\Boolean $mustBeInheritable
	 * @param \System\ListBuilder_1& $derivedAttributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AttributeUsageCheck($attributeType, $mustBeInheritable, $derivedAttributes){}
	/**
	 * @param \System\RuntimeType $decoratedAttribute
	 * @return \System\AttributeUsageAttribute
	 */
	protected static function GetAttributeUsage($decoratedAttribute){}
	/**
	 * @param \System\RuntimeType $caType
	 * @param \System\Int32|int $elementCount
	 * @return \System\Object[]
	 */
	protected static function CreateAttributeArrayHelper($caType, $elementCount){}
	/**
	 * @param \System\IntPtr $pCa
	 * @param \System\Int32|int $cCa
	 * @param \System\Int32& $targets
	 * @param \System\Boolean& $inherited
	 * @param \System\Boolean& $allowMultiple
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _ParseAttributeUsageAttribute($pCa, $cCa, $targets, $inherited, $allowMultiple){}
	/**
	 * @param \System\Reflection\ConstArray $ca
	 * @param \System\AttributeTargets& $targets
	 * @param \System\Boolean& $inherited
	 * @param \System\Boolean& $allowMultiple
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseAttributeUsageAttribute($ca, $targets, $inherited, $allowMultiple){}
	/**
	 * @param \System\Reflection\RuntimeModule $pModule
	 * @param \System\RuntimeType $type
	 * @param \System\IRuntimeMethodInfo $pCtor
	 * @param \System\Byte** $ppBlob
	 * @param \System\Byte* $pEndBlob
	 * @param \System\Int32* $pcNamedArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _CreateCaObject($pModule, $type, $pCtor, $ppBlob, $pEndBlob, $pcNamedArgs){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\RuntimeType $type
	 * @param \System\IRuntimeMethodInfo $ctor
	 * @param \System\IntPtr& $blob
	 * @param \System\IntPtr $blobEnd
	 * @param \System\Int32& $namedArgs
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCaObject($module, $type, $ctor, $blob, $blobEnd, $namedArgs){}
	/**
	 * @param \System\Reflection\RuntimeModule $pModule
	 * @param \System\Byte** $ppBlobStart
	 * @param \System\Byte* $pBlobEnd
	 * @param \System\String& $name
	 * @param \System\Boolean& $bIsProperty
	 * @param \System\RuntimeType& $type
	 * @param \System\Object& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function _GetPropertyOrFieldData($pModule, $ppBlobStart, $pBlobEnd, $name, $bIsProperty, $type, $value){}
	/**
	 * @param \System\Reflection\RuntimeModule $module
	 * @param \System\IntPtr& $blobStart
	 * @param \System\IntPtr $blobEnd
	 * @param \System\String& $name
	 * @param \System\Boolean& $isProperty
	 * @param \System\RuntimeType& $type
	 * @param \System\Object& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPropertyOrFieldData($module, $blobStart, $blobEnd, $name, $isProperty, $type, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

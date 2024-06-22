<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeTypeOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $typeName
	 * @param \System\Boolean|bool $throwOnError
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\RuntimeType
	 */
	#[MethodOverride]protected static function GetType_1 ($typeName, $throwOnError, $ignoreCase, $stackMark){}
	/**
	 * @deprecated
	 * @param \System\Reflection\RuntimeModule $scope
	 * @param \System\Int32|int $typeMetadataToken
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]protected static function GetMethodBase_1 ($scope, $typeMetadataToken){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeMethodInfo $methodHandle
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]protected static function GetMethodBase_2 ($methodHandle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $reflectedType
	 * @param \System\IRuntimeMethodInfo $methodHandle
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]protected static function GetMethodBase_3 ($reflectedType, $methodHandle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $reflectedType
	 * @param \System\RuntimeMethodHandleInternal $methodHandle
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride]protected static function GetMethodBase_4 ($reflectedType, $methodHandle){}
	/**
	 * @deprecated
	 * @param \System\IRuntimeFieldInfo $fieldHandle
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]protected static function GetFieldInfo_1 ($fieldHandle){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $reflectedType
	 * @param \System\IRuntimeFieldInfo $field
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]protected static function GetFieldInfo_2 ($reflectedType, $field){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\String& $name
	 * @param \System\Boolean|bool $allowPrefixLookup
	 * @param \System\Boolean& &$prefixLookup
	 * @param \System\Boolean& &$ignoreCase
	 * @param \System\RuntimeType+MemberListType& &$listType
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function FilterHelper_1 ($bindingFlags, $name, $allowPrefixLookup, &$prefixLookup, &$ignoreCase, &$listType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\BindingFlags $bindingFlags
	 * @param \System\String& $name
	 * @param \System\Boolean& &$ignoreCase
	 * @param \System\RuntimeType+MemberListType& &$listType
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function FilterHelper_2 ($bindingFlags, $name, &$ignoreCase, &$listType){}
}
final class RuntimeType extends \System\Reflection\TypeInfo implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType,
	\System\ICloneable
{
	use RuntimeTypeOverride;

	/**
	 * @field
	 * @var \System\IntPtr
	 */
	protected $m_handle;
	/**
	 * @field
	 * @since readonly
	 * @var \System\RuntimeType
	 */
	protected static $ValueType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $DeclaringMethod;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyQualifiedName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Namespace;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $GUID;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEnum;
	/**
	 * @property
	 * @var \System\Reflection\GenericParameterAttributes
	 * @since readonly
	 */
	public $GenericParameterAttributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSZArray;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GenericParameterPosition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ContainsGenericParameters;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @since readonly
	 */
	public $StructLayoutAttribute;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $BaseType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRefLike;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsConstructedGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecuritySafeCritical;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSecurityTransparent;
	/**
	 * @property
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
	/**
	 * @property
	 * @var \System\RuntimeTypeHandle
	 * @since readonly
	 */
	public $TypeHandle;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $UnderlyingSystemType;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $GenericTypeParameters;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\ConstructorInfo]
	 * @since readonly
	 */
	public $DeclaredConstructors;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\EventInfo]
	 * @since readonly
	 */
	public $DeclaredEvents;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\FieldInfo]
	 * @since readonly
	 */
	public $DeclaredFields;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MemberInfo]
	 * @since readonly
	 */
	public $DeclaredMembers;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MethodInfo]
	 * @since readonly
	 */
	public $DeclaredMethods;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @since readonly
	 */
	public $DeclaredNestedTypes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\PropertyInfo]
	 * @since readonly
	 */
	public $DeclaredProperties;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @since readonly
	 */
	public $ImplementedInterfaces;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInterface;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNested;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPointer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericTypeParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsGenericMethodParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVariableBoundArray;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasElementType;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $GenericTypeArguments;
	/**
	 * @property
	 * @var \System\Reflection\TypeAttributes
	 * @since readonly
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbstract;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsImport;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSealed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSpecialName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedAssembly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamANDAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamily;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedFamORAssem;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPrivate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNestedPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNotPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPublic;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsExplicitLayout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLayoutSequential;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAnsiClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAutoClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUnicodeClass;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCOMObject;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsContextful;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMarshalByRef;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrimitive;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSignatureType;
	/**
	 * @property
	 * @var \System\Reflection\ConstructorInfo
	 * @since readonly
	 */
	public $TypeInitializer;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSerializable;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @uses RuntimeTypeOverride::GetMethodBase_1 <br>protected , args: ($scope, $typeMetadataToken)<br>
	 * @uses RuntimeTypeOverride::GetMethodBase_2 <br>protected , args: ($methodHandle)<br>
	 * @uses RuntimeTypeOverride::GetMethodBase_3 <br>protected , args: ($reflectedType, $methodHandle)<br>
	 * @uses RuntimeTypeOverride::GetMethodBase_4 <br>protected , args: ($reflectedType, $methodHandle)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\MethodBase|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMethodBase (\override ...$args){}
	/**
	 * @uses RuntimeTypeOverride::GetFieldInfo_1 <br>protected , args: ($fieldHandle)<br>
	 * @uses RuntimeTypeOverride::GetFieldInfo_2 <br>protected , args: ($reflectedType, $field)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\FieldInfo|mixed|\override
	 */
	#[MethodOverrideProtected]function GetFieldInfo (\override ...$args){}
	private static function GetPropertyInfo($reflectedType, $tkProperty){}
	/**
	 * @param \System\Reflection\MemberInfo $definition
	 * @param \System\RuntimeType $genericArguments
	 * @param \System\Exception $e
	 * @return \System\Void|void
	 */
	protected static function ValidateGenericArguments($definition, $genericArguments, $e){}
	private static function SplitName($fullname, &$name, &$ns){}
	/**
	 * @param \System\Boolean|bool $isPublic
	 * @param \System\Boolean|bool $isInherited
	 * @param \System\Boolean|bool $isStatic
	 * @return \System\Reflection\BindingFlags
	 */
	protected static function FilterPreCalculate($isPublic, $isInherited, $isStatic){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses RuntimeTypeOverride::FilterHelper_1 <br>private , args: ($bindingFlags, $name, $allowPrefixLookup, &$prefixLookup, &$ignoreCase, &$listType)<br>
	 * @uses RuntimeTypeOverride::FilterHelper_2 <br>private , args: ($bindingFlags, $name, &$ignoreCase, &$listType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function FilterHelper (\override ...$args){}
	private static function FilterApplyPrefixLookup($memberInfo, $name, $ignoreCase){}
	private static function FilterApplyBase($memberInfo, $bindingFlags, $isPublic, $isNonProtectedInternal, $isStatic, $name, $prefixLookup){}
	private static function FilterApplyType($type, $bindingFlags, $name, $prefixLookup, $ns){}
	private static function FilterApplyMethodInfo($method, $bindingFlags, $callConv, $argumentTypes){}
	private static function FilterApplyConstructorInfo($constructor, $bindingFlags, $callConv, $argumentTypes){}
	private static function FilterApplyMethodBase($methodBase, $methodFlags, $bindingFlags, $callConv, $argumentTypes){}
	/**
	 * @return \System\Runtime\CompilerServices\TypeHandle
	 */
	protected function GetNativeTypeHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	protected function GetUnderlyingNativeHandle(){}
	private function InitializeCache(){}
	/**
	 * @return \System\Void|void
	 */
	protected function ClearCache(){}
	private function GetDefaultMemberName(){}
	private function GetMethodCandidates($name, $genericParameterCount, $bindingAttr, $callConv, $types, $allowPrefixLookup){}
	private function GetConstructorCandidates($name, $bindingAttr, $callConv, $types, $allowPrefixLookup){}
	private function GetPropertyCandidates($name, $bindingAttr, $types, $allowPrefixLookup){}
	private function GetEventCandidates($name, $bindingAttr, $allowPrefixLookup){}
	private function GetFieldCandidates($name, $bindingAttr, $allowPrefixLookup){}
	private function GetNestedTypeCandidates($fullname, $bindingAttr, $allowPrefixLookup){}
	private function GetMethodImplCommon($name, $genericParameterCount, $bindingAttr, $binder, $callConv, $types, $modifiers){}
	private static function GetMethodWithSameMetadataDefinitionAs($runtimeType, $method){}
	private static function GetConstructorWithSameMetadataDefinitionAs($runtimeType, $constructor){}
	private static function GetPropertyWithSameMetadataDefinitionAs($runtimeType, $property){}
	private static function GetFieldWithSameMetadataDefinitionAs($runtimeType, $field){}
	private static function GetEventWithSameMetadataDefinitionAs($runtimeType, $eventInfo){}
	private static function GetNestedTypeWithSameMetadataDefinitionAs($runtimeType, $nestedType){}
	private function GetGUID($result){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsDelegate(){}
	/**
	 * @return \System\Object[]|array
	 */
	protected function GetEmptyArray(){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected function GetGenericArgumentsInternal(){}
	private static function CanValueSpecialCast($valueType, $targetType){}
	private static function AllocateValueType($type, $value){}
	/**
	 * @param \System\Object& $value
	 * @param \System\Reflection\ParameterCopyBackAction& $copyBack
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Boolean|bool
	 */
	protected function CheckValue($value, $copyBack, $binder, $culture, $invokeAttr){}
	private function TryChangeType($value, $copyBack, &$isValueType){}
	/**
	 * @param \System\Object& $arg
	 * @param \System\Boolean& $isValueType
	 * @return \System\Boolean|bool
	 */
	protected function TryByRefFastPath($arg, $isValueType){}
	/**
	 * @param \System\RuntimeType $type
	 * @return \System\Reflection\CorElementType
	 */
	protected static function GetUnderlyingType($type){}
	private function GetCachedName($kind){}
	private function CreateInstanceCheckThis(){}
	/**
	 * @param \System\Reflection\BindingFlags $bindingAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object $args
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	protected function CreateInstanceImpl($bindingAttr, $binder, $args, $culture){}
	/**
	 * @param \System\Boolean|bool $publicOnly
	 * @param \System\Boolean|bool $wrapExceptions
	 * @return \System\Object|object
	 */
	protected function CreateInstanceDefaultCtor($publicOnly, $wrapExceptions){}
	/**
	 * @return \System\Object|object
	 */
	protected function CreateInstanceOfT(){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateCachedNestedType(){}
	private static function _CreateEnum($enumType, $value){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\Int64|int $value
	 * @return \System\Object|object
	 */
	protected static function CreateEnum($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected function GetRuntimeModule(){}
	private function GetBaseType(){}
	private static function ThrowIfTypeNeverValidGenericArgument($type){}
	/**
	 * @param \System\RuntimeType $genericArguments
	 * @param \System\RuntimeType $genericParameters
	 * @return \System\Void|void
	 */
	protected static function SanityCheckGenericArguments($genericArguments, $genericParameters){}
	private function GetTypeInfo(){}
}
<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride]public static function GetMethod_1 ($type, $method){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\ConstructorInfo $constructor
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride]public static function GetConstructor_1 ($type, $constructor){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Reflection\FieldInfo $field
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride]public static function GetField_1 ($type, $field){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\String|string $name
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function DefineMethod_1 ($module, $tkParent, $name, $signature, $sigLength, $attributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $returnTypeRequiredCustomModifiers
	 * @param \System\Type $returnTypeOptionalCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $parameterTypeRequiredCustomModifiers [generic: ][]
	 * @param \System\Type $parameterTypeOptionalCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineMethod_2 ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineMethod_3 ($name, $attributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineMethod_4 ($name, $attributes, $callingConvention){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineMethod_5 ($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineMethod_6 ($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\String|string $name
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function DefineField_1 ($module, $tkParent, $name, $signature, $sigLength, $attributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $fieldName
	 * @param \System\Type $type
	 * @param \System\Type $requiredCustomModifiers
	 * @param \System\Type $optionalCustomModifiers
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	#[MethodOverride]public function DefineField_2 ($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes){}
	/**
	 * @deprecated
	 * @param \System\String|string $fieldName
	 * @param \System\Type $type
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	#[MethodOverride]public function DefineField_3 ($fieldName, $type, $attributes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkAssociate
	 * @param \System\Int32|int $tkConstructor
	 * @param \System\Byte $attr
	 * @param \System\Int32|int $attrLength
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function DefineCustomAttribute_1 ($module, $tkAssociate, $tkConstructor, $attr, $attrLength){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\ModuleBuilder $module
	 * @param \System\Int32|int $tkAssociate
	 * @param \System\Int32|int $tkConstructor
	 * @param \System\Byte $attr
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function DefineCustomAttribute_2 ($module, $tkAssociate, $tkConstructor, $attr){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function DefineProperty_1 ($module, $tkParent, $name, $attributes, $signature, $sigLength){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $returnTypeRequiredCustomModifiers
	 * @param \System\Type $returnTypeOptionalCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $parameterTypeRequiredCustomModifiers [generic: ][]
	 * @param \System\Type $parameterTypeOptionalCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride]public function DefineProperty_2 ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride]public function DefineProperty_3 ($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride]public function DefineProperty_4 ($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Type $returnType
	 * @param \System\Type $returnTypeRequiredCustomModifiers
	 * @param \System\Type $returnTypeOptionalCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $parameterTypeRequiredCustomModifiers [generic: ][]
	 * @param \System\Type $parameterTypeOptionalCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride]public function DefineProperty_5 ($name, $attributes, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\String|string $name
	 * @param \System\Reflection\EventAttributes $attributes
	 * @param \System\Int32|int $tkEventType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function DefineEvent_1 ($module, $tkParent, $name, $attributes, $tkEventType){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\EventAttributes $attributes
	 * @param \System\Type $eventtype
	 * @return \System\Reflection\Emit\EventBuilder
	 */
	#[MethodOverride]public function DefineEvent_2 ($name, $attributes, $eventtype){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tk
	 * @param \System\Int32|int $corType
	 * @param \System\Void* $pValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SetConstantValue_1 ($module, $tk, $corType, $pValue){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\ModuleBuilder $module
	 * @param \System\Int32|int $tk
	 * @param \System\Type $destType
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function SetConstantValue_2 ($module, $tk, $destType, $value){}
	/**
	 * @deprecated
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Byte $binaryAttribute
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetGenParamCustomAttribute_1 ($con, $binaryAttribute){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\CustomAttributeBuilder $customBuilder
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetGenParamCustomAttribute_2 ($customBuilder){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\String|string $dllName
	 * @param \System\String|string $entryName
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $returnTypeRequiredCustomModifiers
	 * @param \System\Type $returnTypeOptionalCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $parameterTypeRequiredCustomModifiers [generic: ][]
	 * @param \System\Type $parameterTypeOptionalCustomModifiers [generic: ][]
	 * @param \System\Runtime\InteropServices\CallingConvention $nativeCallConv
	 * @param \System\Runtime\InteropServices\CharSet $nativeCharSet
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefinePInvokeMethod_1 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers, $nativeCallConv, $nativeCharSet){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\String|string $dllName
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Runtime\InteropServices\CallingConvention $nativeCallConv
	 * @param \System\Runtime\InteropServices\CharSet $nativeCharSet
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefinePInvokeMethod_2 ($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\String|string $dllName
	 * @param \System\String|string $entryName
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Runtime\InteropServices\CallingConvention $nativeCallConv
	 * @param \System\Runtime\InteropServices\CharSet $nativeCharSet
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefinePInvokeMethod_3 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredCustomModifiers [generic: ][]
	 * @param \System\Type $optionalCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	#[MethodOverride]public function DefineConstructor_1 ($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	#[MethodOverride]public function DefineConstructor_2 ($attributes, $callingConvention, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Type $interfaces
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_1 ($name, $attr, $parent, $interfaces){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Reflection\Emit\PackingSize $packSize
	 * @param \System\Int32|int $typeSize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_2 ($name, $attr, $parent, $packSize, $typeSize){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_3 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_4 ($name, $attr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_5 ($name, $attr, $parent){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Int32|int $typeSize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_6 ($name, $attr, $parent, $typeSize){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Reflection\Emit\PackingSize $packSize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineNestedType_7 ($name, $attr, $parent, $packSize){}
	/**
	 * @deprecated
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Byte $binaryAttribute
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCustomAttribute_1 ($con, $binaryAttribute){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Emit\CustomAttributeBuilder $customBuilder
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCustomAttribute_2 ($customBuilder){}
}
final class TypeBuilder extends \System\Reflection\TypeInfo implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType
{
	use TypeBuilderOverride;
	/**
	 * @field
	 * @var \System\Collections\Generic\List_1[System\Reflection\Emit\MethodBuilder]
	 */
	protected $m_listMethods;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_lastTokenizedMethod;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $m_isHiddenGlobalType;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const UnspecifiedTypeSize = '0';
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $DeclaringType;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ReflectedType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Reflection\Module
	 * @since readonly
	 */
	public $Module;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsByRefLike;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $GUID;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\RuntimeTypeHandle
	 * @since readonly
	 */
	public $TypeHandle;
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
	public $Namespace;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyQualifiedName;
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
	public $IsTypeDefinition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSZArray;
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
	 * @var \System\Type
	 * @since readonly
	 */
	public $UnderlyingSystemType;
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
	public $IsGenericTypeDefinition;
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
	public $IsGenericParameter;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsConstructedGenericType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GenericParameterPosition;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $DeclaringMethod;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Reflection\Emit\PackingSize
	 * @since readonly
	 */
	public $PackingSize;
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
	 * @var \System\Reflection\MemberTypes
	 * @since readonly
	 */
	public $MemberType;
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
	public $IsEnum;
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
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @since readonly
	 */
	public $StructLayoutAttribute;
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
	public $ContainsGenericParameters;
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
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCollectible;
	private static function SetParentType($module, $tdTypeDef, $tkParent){}
	private static function AddInterfaceImpl($module, $tdTypeDef, $tkInterface){}
	/**
	 * @uses TypeBuilderOverride::DefineMethod_1 <br>protected , args: ($module, $tkParent, $name, $signature, $sigLength, $attributes)<br>
	 * @uses TypeBuilderOverride::DefineMethod_2 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)<br>
	 * @uses TypeBuilderOverride::DefineMethod_3 <br>public , args: ($name, $attributes)<br>
	 * @uses TypeBuilderOverride::DefineMethod_4 <br>public , args: ($name, $attributes, $callingConvention)<br>
	 * @uses TypeBuilderOverride::DefineMethod_5 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $parameterTypes)<br>
	 * @uses TypeBuilderOverride::DefineMethod_6 <br>public , args: ($name, $attributes, $returnType, $parameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Reflection\Emit\MethodBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineMethod (\override ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @return \System\Int32|int
	 */
	protected static function DefineMethodSpec($module, $tkParent, $signature, $sigLength){}
	/**
	 * @uses TypeBuilderOverride::DefineField_1 <br>protected , args: ($module, $tkParent, $name, $signature, $sigLength, $attributes)<br>
	 * @uses TypeBuilderOverride::DefineField_2 <br>public , args: ($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes)<br>
	 * @uses TypeBuilderOverride::DefineField_3 <br>public , args: ($fieldName, $type, $attributes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Reflection\Emit\FieldBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineField (\override ...$args){}
	private static function SetMethodIL($module, $tk, $isInitLocals, $body, $bodyLength, $LocalSig, $sigLength, $maxStackSize, $exceptions, $numExceptions, $tokenFixups, $numTokenFixups){}
	/**
	 * @uses TypeBuilderOverride::DefineCustomAttribute_1 <br>private , args: ($module, $tkAssociate, $tkConstructor, $attr, $attrLength)<br>
	 * @uses TypeBuilderOverride::DefineCustomAttribute_2 <br>protected , args: ($module, $tkAssociate, $tkConstructor, $attr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function DefineCustomAttribute (\override ...$args){}
	/**
	 * @uses TypeBuilderOverride::DefineProperty_1 <br>protected , args: ($module, $tkParent, $name, $attributes, $signature, $sigLength)<br>
	 * @uses TypeBuilderOverride::DefineProperty_2 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)<br>
	 * @uses TypeBuilderOverride::DefineProperty_3 <br>public , args: ($name, $attributes, $returnType, $parameterTypes)<br>
	 * @uses TypeBuilderOverride::DefineProperty_4 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $parameterTypes)<br>
	 * @uses TypeBuilderOverride::DefineProperty_5 <br>public , args: ($name, $attributes, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Reflection\Emit\PropertyBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineProperty (\override ...$args){}
	/**
	 * @uses TypeBuilderOverride::DefineEvent_1 <br>protected , args: ($module, $tkParent, $name, $attributes, $tkEventType)<br>
	 * @uses TypeBuilderOverride::DefineEvent_2 <br>public , args: ($name, $attributes, $eventtype)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Reflection\Emit\EventBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineEvent (\override ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkAssociation
	 * @param \System\Reflection\MethodSemanticsAttributes $semantics
	 * @param \System\Int32|int $tkMethod
	 * @return \System\Void|void
	 */
	protected static function DefineMethodSemantics($module, $tkAssociation, $semantics, $tkMethod){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkType
	 * @param \System\Int32|int $tkBody
	 * @param \System\Int32|int $tkDecl
	 * @return \System\Void|void
	 */
	protected static function DefineMethodImpl($module, $tkType, $tkBody, $tkDecl){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkMethod
	 * @param \System\Reflection\MethodImplAttributes $MethodImplAttributes
	 * @return \System\Void|void
	 */
	protected static function SetMethodImpl($module, $tkMethod, $MethodImplAttributes){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkMethod
	 * @param \System\Int32|int $iSequence
	 * @param \System\Reflection\ParameterAttributes $iParamAttributes
	 * @param \System\String|string $strParamName
	 * @return \System\Int32|int
	 */
	protected static function SetParamInfo($module, $tkMethod, $iSequence, $iParamAttributes, $strParamName){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @return \System\Int32|int
	 */
	protected static function GetTokenFromSig($module, $signature, $sigLength){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $fdToken
	 * @param \System\Int32|int $iOffset
	 * @return \System\Void|void
	 */
	protected static function SetFieldLayoutOffset($module, $fdToken, $iOffset){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tk
	 * @param \System\Reflection\Emit\PackingSize $iPackingSize
	 * @param \System\Int32|int $iTypeSize
	 * @return \System\Void|void
	 */
	protected static function SetClassLayout($module, $tk, $iPackingSize, $iTypeSize){}
	/**
	 * @uses TypeBuilderOverride::SetConstantValue_1 <br>private , args: ($module, $tk, $corType, $pValue)<br>
	 * @uses TypeBuilderOverride::SetConstantValue_2 <br>protected , args: ($module, $tk, $destType, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetConstantValue (\override ...$args){}
	private static function SetPInvokeData($module, $DllName, $name, $token, $linkFlags){}
	/**
	 * @param \System\Type $t1
	 * @param \System\Type $t2
	 * @return \System\Boolean|bool
	 */
	protected static function IsTypeEqual($t1, $t2){}
	private function DefineDataHelper($name, $data, $size, $attributes){}
	private function VerifyTypeAttributes($attr){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsCreated(){}
	private static function DefineType($module, $fullname, $tkParent, $attributes, $tkEnclosingType, $interfaceTokens){}
	private static function DefineGenericParam($module, $name, $tkParent, $attributes, $position, $constraints){}
	private static function TermCreateClass($module, $tk, $type){}
	/**
	 * @return \System\Void|void
	 */
	protected function ThrowIfCreated(){}
	/**
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	protected function GetModuleBuilder(){}
	/**
	 * @param \System\Reflection\GenericParameterAttributes $genericParameterAttributes
	 * @return \System\Void|void
	 */
	protected function SetGenParamAttributes($genericParameterAttributes){}
	/**
	 * @uses TypeBuilderOverride::SetGenParamCustomAttribute_1 <br>protected , args: ($con, $binaryAttribute)<br>
	 * @uses TypeBuilderOverride::SetGenParamCustomAttribute_2 <br>protected , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetGenParamCustomAttribute (\override ...$args){}
	private function SetGenParamCustomAttributeNoLock($ca){}
	/**
	 * @param \System\Type ...$interfaces
	 * @return \System\Void|void
	 */
	protected function SetInterfaces(...$interfaces){}
	/**
	 * @param \System\String ...$names
	 * @return \System\Reflection\Emit\GenericTypeParameterBuilder[]
	 */
	public function DefineGenericParameters(...$names){}
	/**
	 * @param \System\Reflection\MethodInfo $methodInfoBody
	 * @param \System\Reflection\MethodInfo $methodInfoDeclaration
	 * @return \System\Void|void
	 */
	public function DefineMethodOverride($methodInfoBody, $methodInfoDeclaration){}
	private function DefineMethodOverrideNoLock($methodInfoBody, $methodInfoDeclaration){}
	private function DefineMethodNoLock($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @uses TypeBuilderOverride::DefinePInvokeMethod_1 <br>public , args: ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers, $nativeCallConv, $nativeCharSet)<br>
	 * @uses TypeBuilderOverride::DefinePInvokeMethod_2 <br>public , args: ($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)<br>
	 * @uses TypeBuilderOverride::DefinePInvokeMethod_3 <br>public , args: ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\MethodBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefinePInvokeMethod (\override ...$args){}
	/**
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	public function DefineTypeInitializer(){}
	private function DefineTypeInitializerNoLock(){}
	/**
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	public function DefineDefaultConstructor($attributes){}
	private function DefineDefaultConstructorNoLock($attributes){}
	/**
	 * @uses TypeBuilderOverride::DefineConstructor_1 <br>public , args: ($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers)<br>
	 * @uses TypeBuilderOverride::DefineConstructor_2 <br>public , args: ($attributes, $callingConvention, $parameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\ConstructorBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineConstructor (\override ...$args){}
	private function DefineConstructorNoLock($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @uses TypeBuilderOverride::DefineNestedType_1 <br>public , args: ($name, $attr, $parent, $interfaces)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_2 <br>public , args: ($name, $attr, $parent, $packSize, $typeSize)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_3 <br>public , args: ($name)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_4 <br>public , args: ($name, $attr)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_5 <br>public , args: ($name, $attr, $parent)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_6 <br>public , args: ($name, $attr, $parent, $typeSize)<br>
	 * @uses TypeBuilderOverride::DefineNestedType_7 <br>public , args: ($name, $attr, $parent, $packSize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\TypeBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineNestedType (\override ...$args){}
	private function DefineFieldNoLock($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Byte $data
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	public function DefineInitializedData($name, $data, $attributes){}
	private function DefineInitializedDataNoLock($name, $data, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $size
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	public function DefineUninitializedData($name, $size, $attributes){}
	private function DefineUninitializedDataNoLock($name, $size, $attributes){}
	private function DefinePropertyNoLock($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	private function DefineEventNoLock($name, $attributes, $eventtype){}
	/**
	 * @return \System\Reflection\TypeInfo
	 */
	public function CreateTypeInfo(){}
	/**
	 * @return \System\Type
	 */
	public function CreateType(){}
	/**
	 * @return \System\Reflection\TypeInfo
	 */
	protected function CreateTypeInfoImpl(){}
	private function CreateTypeNoLock(){}
	/**
	 * @param \System\Type $parent
	 * @return \System\Void|void
	 */
	public function SetParent($parent){}
	/**
	 * @param \System\Type $interfaceType
	 * @return \System\Void|void
	 */
	public function AddInterfaceImplementation($interfaceType){}
	/**
	 * @uses TypeBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses TypeBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
	private function GetTypeInfo(){}
}
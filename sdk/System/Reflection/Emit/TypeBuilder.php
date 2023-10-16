<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeBuilderMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_1($typeInfo){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAssignableFrom_2($c){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public static function GetMethod_1($type, $method){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_2($name){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_3($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_4($name, $bindingAttr, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_5($name, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_6($name, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_7($name, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_8($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_9($name, $genericParameterCount, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_10($name, $genericParameterCount, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_11($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_12($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public static function GetConstructor_1($type, $constructor){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_2($types){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_3($bindingAttr, $types){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_4($bindingAttr, $binder, $types, $modifiers){}
	/**
	 * @return \System\Reflection\ConstructorInfo
	 */
	#[MethodOverride] public  function GetConstructor_5($bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public static function GetField_1($type, $field){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_3($name){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function DefineMethod_1($module, $tkParent, $name, $signature, $sigLength, $attributes){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineMethod_2($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineMethod_3($name, $attributes){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineMethod_4($name, $attributes, $callingConvention){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineMethod_5($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineMethod_6($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function DefineField_1($module, $tkParent, $name, $signature, $sigLength, $attributes){}
	/**
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	#[MethodOverride] public  function DefineField_2($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes){}
	/**
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	#[MethodOverride] public  function DefineField_3($fieldName, $type, $attributes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function DefineCustomAttribute_1($module, $tkAssociate, $tkConstructor, $attr, $attrLength){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function DefineCustomAttribute_2($module, $tkAssociate, $tkConstructor, $attr){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function DefineProperty_1($module, $tkParent, $name, $attributes, $signature, $sigLength){}
	/**
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride] public  function DefineProperty_2($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride] public  function DefineProperty_3($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride] public  function DefineProperty_4($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\PropertyBuilder
	 */
	#[MethodOverride] public  function DefineProperty_5($name, $attributes, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function DefineEvent_1($module, $tkParent, $name, $attributes, $tkEventType){}
	/**
	 * @return \System\Reflection\Emit\EventBuilder
	 */
	#[MethodOverride] public  function DefineEvent_2($name, $attributes, $eventtype){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetConstantValue_1($module, $tk, $corType, $pValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function SetConstantValue_2($module, $tk, $destType, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetGenParamCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetGenParamCustomAttribute_2($customBuilder){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_1(){}
	/**
	 * @return \System\Reflection\Module
	 */
	#[MethodOverride] public  function get_Module_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_1($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_2($name, $invokeAttr, $binder, $target, $args){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function InvokeMember_3($name, $invokeAttr, $binder, $target, $args, $culture){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_1($bindingAttr){}
	/**
	 * @return \System\Reflection\ConstructorInfo[]
	 */
	#[MethodOverride] public  function GetConstructors_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_1($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] protected  function GetMethodImpl_2($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1($bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_1($name, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetInterface_2($name){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\EventInfo
	 */
	#[MethodOverride] public  function GetEvent_2($name){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_1(){}
	/**
	 * @return \System\Reflection\EventInfo[]
	 */
	#[MethodOverride] public  function GetEvents_2($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_1($bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo[]
	 */
	#[MethodOverride] public  function GetProperties_2(){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_1($bindingAttr){}
	/**
	 * @return \System\Type[]
	 */
	#[MethodOverride] public  function GetNestedTypes_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_1($name, $bindingAttr){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetNestedType_2($name){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_1($name, $type, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_2($name){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMember_3($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_1($bindingAttr){}
	/**
	 * @return \System\Reflection\MemberInfo[]
	 */
	#[MethodOverride] public  function GetMembers_2(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function MakeArrayType_2($rank){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefinePInvokeMethod_1($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers, $nativeCallConv, $nativeCharSet){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefinePInvokeMethod_2($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefinePInvokeMethod_3($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	#[MethodOverride] public  function DefineConstructor_1($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	#[MethodOverride] public  function DefineConstructor_2($attributes, $callingConvention, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_1($name, $attr, $parent, $interfaces){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_2($name, $attr, $parent, $packSize, $typeSize){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_3($name){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_4($name, $attr){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_5($name, $attr, $parent){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_6($name, $attr, $parent, $typeSize){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineNestedType_7($name, $attr, $parent, $packSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_1($name){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_2($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_3($name, $returnType){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_4($name, $types){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_5($name, $returnType, $types){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_6($name, $returnType, $types, $modifiers){}
	/**
	 * @return \System\Reflection\PropertyInfo
	 */
	#[MethodOverride] public  function GetProperty_7($name, $bindingAttr, $binder, $returnType, $types, $modifiers){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($o){}
}
/**
 */
class TypeBuilder extends \System\Reflection\TypeInfo implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Reflection\IReflect,
	\System\Reflection\IReflectableType
{
	/**
	 * @var \System\Collections\Generic\List_1[System\Reflection\Emit\MethodBuilder]
	 * @field
	 */
	protected $m_listMethods;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_lastTokenizedMethod;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_isHiddenGlobalType;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $UnspecifiedTypeSize;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRefLike;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $GUID;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\RuntimeTypeHandle
	 * @property
	 */
	public readonly $TypeHandle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Namespace;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AssemblyQualifiedName;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $BaseType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSZArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecurityCritical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecuritySafeCritical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSecurityTransparent;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $UnderlyingSystemType;
	/**
	 * @var \System\Reflection\GenericParameterAttributes
	 * @property
	 */
	public readonly $GenericParameterAttributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsConstructedGenericType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $GenericParameterPosition;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $DeclaringMethod;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Reflection\Emit\PackingSize
	 * @property
	 */
	public readonly $PackingSize;
	/**
	 * @var \System\Type[]
	 * @property
	 */
	public readonly $GenericTypeParameters;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\ConstructorInfo]
	 * @property
	 */
	public readonly $DeclaredConstructors;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\EventInfo]
	 * @property
	 */
	public readonly $DeclaredEvents;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\FieldInfo]
	 * @property
	 */
	public readonly $DeclaredFields;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MemberInfo]
	 * @property
	 */
	public readonly $DeclaredMembers;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\MethodInfo]
	 * @property
	 */
	public readonly $DeclaredMethods;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\TypeInfo]
	 * @property
	 */
	public readonly $DeclaredNestedTypes;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\PropertyInfo]
	 * @property
	 */
	public readonly $DeclaredProperties;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Type]
	 * @property
	 */
	public readonly $ImplementedInterfaces;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInterface;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNested;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsByRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPointer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericTypeParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericMethodParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVariableBoundArray;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasElementType;
	/**
	 * @var \System\Type[]
	 * @property
	 */
	public readonly $GenericTypeArguments;
	/**
	 * @var \System\Reflection\TypeAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAbstract;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsImport;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSealed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamANDAssem;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamily;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedFamORAssem;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedPrivate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNestedPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNotPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAutoLayout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsExplicitLayout;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLayoutSequential;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAnsiClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAutoClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUnicodeClass;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCOMObject;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsContextful;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnum;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMarshalByRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrimitive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValueType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSignatureType;
	/**
	 * @var \System\Runtime\InteropServices\StructLayoutAttribute
	 * @property
	 */
	public readonly $StructLayoutAttribute;
	/**
	 * @var \System\Reflection\ConstructorInfo
	 * @property
	 */
	public readonly $TypeInitializer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSerializable;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ContainsGenericParameters;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVisible;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
	/**
	 * @uses TypeBuilderMethodsOverride::IsAssignableFrom_1 ($typeInfo)
	 * @uses TypeBuilderMethodsOverride::IsAssignableFrom_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAssignableFrom(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetMethod_1 ($type, $method)
	 * @uses TypeBuilderMethodsOverride::GetMethod_2 ($name)
	 * @uses TypeBuilderMethodsOverride::GetMethod_3 ($name, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetMethod_4 ($name, $bindingAttr, $types)
	 * @uses TypeBuilderMethodsOverride::GetMethod_5 ($name, $types)
	 * @uses TypeBuilderMethodsOverride::GetMethod_6 ($name, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethod_7 ($name, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethod_8 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethod_9 ($name, $genericParameterCount, $types)
	 * @uses TypeBuilderMethodsOverride::GetMethod_10 ($name, $genericParameterCount, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethod_11 ($name, $genericParameterCount, $bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethod_12 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetConstructor_1 ($type, $constructor)
	 * @uses TypeBuilderMethodsOverride::GetConstructor_2 ($types)
	 * @uses TypeBuilderMethodsOverride::GetConstructor_3 ($bindingAttr, $types)
	 * @uses TypeBuilderMethodsOverride::GetConstructor_4 ($bindingAttr, $binder, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetConstructor_5 ($bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructor(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetField_1 ($type, $field)
	 * @uses TypeBuilderMethodsOverride::GetField_2 ($name, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetField_3 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tdTypeDef
	 * @param \System\Int32|int $tkParent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetParentType($module, $tdTypeDef, $tkParent){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tdTypeDef
	 * @param \System\Int32|int $tkInterface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddInterfaceImpl($module, $tdTypeDef, $tkInterface){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineMethod_1 ($module, $tkParent, $name, $signature, $sigLength, $attributes)
	 * @uses TypeBuilderMethodsOverride::DefineMethod_2 ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)
	 * @uses TypeBuilderMethodsOverride::DefineMethod_3 ($name, $attributes)
	 * @uses TypeBuilderMethodsOverride::DefineMethod_4 ($name, $attributes, $callingConvention)
	 * @uses TypeBuilderMethodsOverride::DefineMethod_5 ($name, $attributes, $callingConvention, $returnType, $parameterTypes)
	 * @uses TypeBuilderMethodsOverride::DefineMethod_6 ($name, $attributes, $returnType, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineMethod(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkParent
	 * @param \System\Byte[] $signature
	 * @param \System\Int32|int $sigLength
	 * @return \System\Int32|int
	 */
	protected static function DefineMethodSpec($module, $tkParent, $signature, $sigLength){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineField_1 ($module, $tkParent, $name, $signature, $sigLength, $attributes)
	 * @uses TypeBuilderMethodsOverride::DefineField_2 ($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes)
	 * @uses TypeBuilderMethodsOverride::DefineField_3 ($fieldName, $type, $attributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineField(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tk
	 * @param \System\Boolean $isInitLocals
	 * @param \System\Byte[] $body
	 * @param \System\Int32|int $bodyLength
	 * @param \System\Byte[] $LocalSig
	 * @param \System\Int32|int $sigLength
	 * @param \System\Int32|int $maxStackSize
	 * @param \System\Reflection\Emit\ExceptionHandler[] $exceptions
	 * @param \System\Int32|int $numExceptions
	 * @param \System\Int32[] $tokenFixups
	 * @param \System\Int32|int $numTokenFixups
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetMethodIL($module, $tk, $isInitLocals, $body, $bodyLength, $LocalSig, $sigLength, $maxStackSize, $exceptions, $numExceptions, $tokenFixups, $numTokenFixups){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineCustomAttribute_1 ($module, $tkAssociate, $tkConstructor, $attr, $attrLength)
	 * @uses TypeBuilderMethodsOverride::DefineCustomAttribute_2 ($module, $tkAssociate, $tkConstructor, $attr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DefineCustomAttribute(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineProperty_1 ($module, $tkParent, $name, $attributes, $signature, $sigLength)
	 * @uses TypeBuilderMethodsOverride::DefineProperty_2 ($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)
	 * @uses TypeBuilderMethodsOverride::DefineProperty_3 ($name, $attributes, $returnType, $parameterTypes)
	 * @uses TypeBuilderMethodsOverride::DefineProperty_4 ($name, $attributes, $callingConvention, $returnType, $parameterTypes)
	 * @uses TypeBuilderMethodsOverride::DefineProperty_5 ($name, $attributes, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineProperty(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineEvent_1 ($module, $tkParent, $name, $attributes, $tkEventType)
	 * @uses TypeBuilderMethodsOverride::DefineEvent_2 ($name, $attributes, $eventtype)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineEvent(mixed ...$args){}
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
	 * @param \System\Byte[] $signature
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
	 * @uses TypeBuilderMethodsOverride::SetConstantValue_1 ($module, $tk, $corType, $pValue)
	 * @uses TypeBuilderMethodsOverride::SetConstantValue_2 ($module, $tk, $destType, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetConstantValue(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $DllName
	 * @param \System\String|string $name
	 * @param \System\Int32|int $token
	 * @param \System\Int32|int $linkFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetPInvokeData($module, $DllName, $name, $token, $linkFlags){}
	/**
	 * @param \System\Type $t1
	 * @param \System\Type $t2
	 * @return \System\Boolean
	 */
	protected static function IsTypeEqual($t1, $t2){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $size
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineDataHelper($name, $data, $size, $attributes){}
	/**
	 * @param \System\Reflection\TypeAttributes $attr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyTypeAttributes($attr){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsCreated(){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $fullname
	 * @param \System\Int32|int $tkParent
	 * @param \System\Reflection\TypeAttributes $attributes
	 * @param \System\Int32|int $tkEnclosingType
	 * @param \System\Int32[] $interfaceTokens
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DefineType($module, $fullname, $tkParent, $attributes, $tkEnclosingType, $interfaceTokens){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $name
	 * @param \System\Int32|int $tkParent
	 * @param \System\Reflection\GenericParameterAttributes $attributes
	 * @param \System\Int32|int $position
	 * @param \System\Int32[] $constraints
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DefineGenericParam($module, $name, $tkParent, $attributes, $position, $constraints){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tk
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TermCreateClass($module, $tk, $type){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ThrowIfCreated(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_SyncRoot(){}
	/**
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	protected  function GetModuleBuilder(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function get_BakedRuntimeType(){}
	/**
	 * @param \System\Reflection\GenericParameterAttributes $genericParameterAttributes
	 * @return \System\Void|void
	 */
	protected  function SetGenParamAttributes($genericParameterAttributes){}
	/**
	 * @uses TypeBuilderMethodsOverride::SetGenParamCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses TypeBuilderMethodsOverride::SetGenParamCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetGenParamCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\CustAttr $ca
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetGenParamCustomAttributeNoLock($ca){}
	/**
	 * @uses TypeBuilderMethodsOverride::get_Module_1 ()
	 * @uses TypeBuilderMethodsOverride::get_Module_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Module(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::InvokeMember_1 ($name, $invokeAttr, $binder, $target, $args, $modifiers, $culture, $namedParameters)
	 * @uses TypeBuilderMethodsOverride::InvokeMember_2 ($name, $invokeAttr, $binder, $target, $args)
	 * @uses TypeBuilderMethodsOverride::InvokeMember_3 ($name, $invokeAttr, $binder, $target, $args, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeMember(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetConstructors_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetConstructors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstructors(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetMethodImpl_1 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetMethodImpl_2 ($name, $genericParameterCount, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethodImpl(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetMethods_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetFields_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetInterface_1 ($name, $ignoreCase)
	 * @uses TypeBuilderMethodsOverride::GetInterface_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetInterface(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetEvent_1 ($name, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetEvent_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvent(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetEvents_1 ()
	 * @uses TypeBuilderMethodsOverride::GetEvents_2 ($bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEvents(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetProperties_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetProperties_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetNestedTypes_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetNestedTypes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedTypes(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetNestedType_1 ($name, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetNestedType_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNestedType(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetMember_1 ($name, $type, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetMember_2 ($name)
	 * @uses TypeBuilderMethodsOverride::GetMember_3 ($name, $bindingAttr)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMember(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetMembers_1 ($bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetMembers_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMembers(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::MakeArrayType_1 ()
	 * @uses TypeBuilderMethodsOverride::MakeArrayType_2 ($rank)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeArrayType(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses TypeBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Type[] $interfaces
	 * @return \System\Void|void
	 */
	protected  function SetInterfaces($interfaces){}
	/**
	 * @param \System\String[] $names
	 * @return \System\Reflection\Emit\GenericTypeParameterBuilder[]
	 */
	public  function DefineGenericParameters($names){}
	/**
	 * @param \System\Reflection\MethodInfo $methodInfoBody
	 * @param \System\Reflection\MethodInfo $methodInfoDeclaration
	 * @return \System\Void|void
	 */
	public  function DefineMethodOverride($methodInfoBody, $methodInfoDeclaration){}
	/**
	 * @param \System\Reflection\MethodInfo $methodInfoBody
	 * @param \System\Reflection\MethodInfo $methodInfoDeclaration
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineMethodOverrideNoLock($methodInfoBody, $methodInfoDeclaration){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $returnTypeRequiredCustomModifiers
	 * @param \System\Type[] $returnTypeOptionalCustomModifiers
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $parameterTypeRequiredCustomModifiers
	 * @param \System\Type[][] $parameterTypeOptionalCustomModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineMethodNoLock($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefinePInvokeMethod_1 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers, $nativeCallConv, $nativeCharSet)
	 * @uses TypeBuilderMethodsOverride::DefinePInvokeMethod_2 ($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)
	 * @uses TypeBuilderMethodsOverride::DefinePInvokeMethod_3 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefinePInvokeMethod(mixed ...$args){}
	/**
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	public  function DefineTypeInitializer(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineTypeInitializerNoLock(){}
	/**
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @return \System\Reflection\Emit\ConstructorBuilder
	 */
	public  function DefineDefaultConstructor($attributes){}
	/**
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineDefaultConstructorNoLock($attributes){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineConstructor_1 ($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers)
	 * @uses TypeBuilderMethodsOverride::DefineConstructor_2 ($attributes, $callingConvention, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineConstructor(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $requiredCustomModifiers
	 * @param \System\Type[][] $optionalCustomModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineConstructorNoLock($attributes, $callingConvention, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers){}
	/**
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_1 ($name, $attr, $parent, $interfaces)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_2 ($name, $attr, $parent, $packSize, $typeSize)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_3 ($name)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_4 ($name, $attr)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_5 ($name, $attr, $parent)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_6 ($name, $attr, $parent, $typeSize)
	 * @uses TypeBuilderMethodsOverride::DefineNestedType_7 ($name, $attr, $parent, $packSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineNestedType(mixed ...$args){}
	/**
	 * @param \System\String|string $fieldName
	 * @param \System\Type $type
	 * @param \System\Type[] $requiredCustomModifiers
	 * @param \System\Type[] $optionalCustomModifiers
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineFieldNoLock($fieldName, $type, $requiredCustomModifiers, $optionalCustomModifiers, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Byte[] $data
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	public  function DefineInitializedData($name, $data, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Byte[] $data
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineInitializedDataNoLock($name, $data, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $size
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @return \System\Reflection\Emit\FieldBuilder
	 */
	public  function DefineUninitializedData($name, $size, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $size
	 * @param \System\Reflection\FieldAttributes $attributes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineUninitializedDataNoLock($name, $size, $attributes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\PropertyAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $returnTypeRequiredCustomModifiers
	 * @param \System\Type[] $returnTypeOptionalCustomModifiers
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $parameterTypeRequiredCustomModifiers
	 * @param \System\Type[][] $parameterTypeOptionalCustomModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefinePropertyNoLock($name, $attributes, $callingConvention, $returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\EventAttributes $attributes
	 * @param \System\Type $eventtype
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineEventNoLock($name, $attributes, $eventtype){}
	/**
	 * @return \System\Reflection\TypeInfo
	 */
	public  function CreateTypeInfo(){}
	/**
	 * @return \System\Type
	 */
	public  function CreateType(){}
	/**
	 * @return \System\Reflection\TypeInfo
	 */
	protected  function CreateTypeInfoImpl(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTypeNoLock(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Reflection\Emit\PackingSize
	 */
	public  function get_PackingSize(){}
	/**
	 * @param \System\Type $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Type $interfaceType
	 * @return \System\Void|void
	 */
	public  function AddInterfaceImplementation($interfaceType){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_TypeToken(){}
	/**
	 * @uses TypeBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses TypeBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeInfo(){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetType_1 ()
	 * @uses TypeBuilderMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::GetProperty_1 ($name)
	 * @uses TypeBuilderMethodsOverride::GetProperty_2 ($name, $bindingAttr)
	 * @uses TypeBuilderMethodsOverride::GetProperty_3 ($name, $returnType)
	 * @uses TypeBuilderMethodsOverride::GetProperty_4 ($name, $types)
	 * @uses TypeBuilderMethodsOverride::GetProperty_5 ($name, $returnType, $types)
	 * @uses TypeBuilderMethodsOverride::GetProperty_6 ($name, $returnType, $types, $modifiers)
	 * @uses TypeBuilderMethodsOverride::GetProperty_7 ($name, $bindingAttr, $binder, $returnType, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperty(mixed ...$args){}
	/**
	 * @uses TypeBuilderMethodsOverride::Equals_1 ($o)
	 * @uses TypeBuilderMethodsOverride::Equals_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}

<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ModuleBuilderMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] private static function GetType_1($strFormat, $baseType){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2($className){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_3($className, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_4($className, $throwOnError, $ignoreCase){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_5(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetMemberRef_1($module, $refedModule, $tr, $defToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetMemberRef_2($refedModule, $tr, $defToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetMemberRefFromSignature_1($module, $tr, $methodName, $signature, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetMemberRefFromSignature_2($tr, $methodName, $signature, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetMemberRefOfMethodInfo_1($module, $tr, $method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetMemberRefOfMethodInfo_2($tr, $method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetMemberRefOfMethodInfo_3($tr, $method){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetMemberRefOfFieldInfo_1($module, $tkType, $declaringType, $tkField){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetMemberRefOfFieldInfo_2($tkType, $declaringType, $runtimeField){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetTokenFromTypeSpec_1($pModule, $signature, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTokenFromTypeSpec_2($signature, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetArrayMethodToken_1($module, $tkTypeSpec, $methodName, $signature, $sigLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetArrayMethodToken_2($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetStringConstant_1($module, $str, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetStringConstant_2($str){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_1($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride] protected  function GetMemberRefSignature_2($method, $cGenericParameters){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public  function ResolveMethod_2($metadataToken){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function ResolveField_2($metadataToken){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function ResolveType_2($metadataToken){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_1($metadataToken, $genericTypeArguments, $genericMethodArguments){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	#[MethodOverride] public  function ResolveMember_2($metadataToken){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_1($bindingFlags){}
	/**
	 * @return \System\Reflection\FieldInfo[]
	 */
	#[MethodOverride] public  function GetFields_2(){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_1($name, $bindingAttr){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	#[MethodOverride] public  function GetField_2($name){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_1($bindingFlags){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetMethods_2(){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_1($name, $attr, $parent, $packingSize, $typesize){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_2($name, $attr, $parent, $interfaces){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_3($name){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_4($name, $attr){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_5($name, $attr, $parent){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_6($name, $attr, $parent, $typesize){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride] public  function DefineType_7($name, $attr, $parent, $packsize){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefinePInvokeMethod_1($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefinePInvokeMethod_2($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineGlobalMethod_1($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineGlobalMethod_2($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride] public  function DefineGlobalMethod_3($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetTypeTokenInternal_1($type){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function GetTypeTokenInternal_2($type, $getGenericDefinition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_1($name){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_2($name, $types){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetMethod_3($name, $bindingAttr, $binder, $callConvention, $types, $modifiers){}
}
/**
 */
class ModuleBuilder extends \System\Reflection\Module implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Reflection\RuntimeModule
	 * @field
	 */
	protected readonly $_internalModule;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullyQualifiedName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MDStreamVersion;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $ModuleVersionId;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ScopeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\Assembly
	 * @property
	 */
	public readonly $Assembly;
	/**
	 * @var \System\ModuleHandle
	 * @property
	 */
	public readonly $ModuleHandle;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @param \System\String|string $typeName
	 * @return \System\String|string
	 */
	protected static function UnmangleTypeName($typeName){}
	/**
	 * @return \System\Reflection\Emit\AssemblyBuilder
	 */
	protected  function get_ContainingAssemblyBuilder(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	protected  function AddType($name, $type){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Type $enclosingType
	 * @return \System\Void|void
	 */
	protected  function CheckTypeNameConflict($strTypeName, $enclosingType){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetType_1 ($strFormat, $baseType)
	 * @uses ModuleBuilderMethodsOverride::GetType_2 ($className)
	 * @uses ModuleBuilderMethodsOverride::GetType_3 ($className, $ignoreCase)
	 * @uses ModuleBuilderMethodsOverride::GetType_4 ($className, $throwOnError, $ignoreCase)
	 * @uses ModuleBuilderMethodsOverride::GetType_5 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $strFullName
	 * @param \System\Runtime\CompilerServices\QCallModule $refedModule
	 * @param \System\Int32|int $tkResolution
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTypeRef($module, $strFullName, $refedModule, $tkResolution){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMemberRef_1 ($module, $refedModule, $tr, $defToken)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRef_2 ($refedModule, $tr, $defToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRef(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefFromSignature_1 ($module, $tr, $methodName, $signature, $length)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefFromSignature_2 ($tr, $methodName, $signature, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefFromSignature(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefOfMethodInfo_1 ($module, $tr, $method)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefOfMethodInfo_2 ($tr, $method)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefOfMethodInfo_3 ($tr, $method)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefOfMethodInfo(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefOfFieldInfo_1 ($module, $tkType, $declaringType, $tkField)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefOfFieldInfo_2 ($tkType, $declaringType, $runtimeField)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefOfFieldInfo(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetTokenFromTypeSpec_1 ($pModule, $signature, $length)
	 * @uses ModuleBuilderMethodsOverride::GetTokenFromTypeSpec_2 ($signature, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTokenFromTypeSpec(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetArrayMethodToken_1 ($module, $tkTypeSpec, $methodName, $signature, $sigLength)
	 * @uses ModuleBuilderMethodsOverride::GetArrayMethodToken_2 ($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetArrayMethodToken(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetStringConstant_1 ($module, $str, $length)
	 * @uses ModuleBuilderMethodsOverride::GetStringConstant_2 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStringConstant(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $fdToken
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function SetFieldRVAContent($module, $fdToken, $data, $length){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Boolean $ignoreCase
	 * @return \System\Type
	 */
	protected  function FindTypeBuilderWithName($strTypeName, $ignoreCase){}
	/**
	 * @param \System\Type $type
	 * @param \System\Reflection\Module $refedModule
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeRefNested($type, $refedModule){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Boolean $usingRef
	 * @return \System\Int32|int
	 */
	protected  function InternalGetConstructorToken($con, $usingRef){}
	/**
	 * @return \System\Object|object
	 */
	protected  function get_SyncRoot(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function get_InternalModule(){}
	/**
	 * @param \System\Reflection\Module $m
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRuntimeModuleFromModule($m){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Type[] $optionalParameterTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMemberRefToken($method, $optionalParameterTypes){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefSignature_1 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters)
	 * @uses ModuleBuilderMethodsOverride::GetMemberRefSignature_2 ($method, $cGenericParameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMemberRefSignature(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodBase $methodBase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGenericMethodBaseDefinition($methodBase){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses ModuleBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\Type[]
	 */
	protected  function GetTypesNoLock(){}
	/**
	 * @param \System\String|string $className
	 * @param \System\Boolean $throwOnError
	 * @param \System\Boolean $ignoreCase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeNoLock($className, $throwOnError, $ignoreCase){}
	/**
	 * @uses ModuleBuilderMethodsOverride::ResolveMethod_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses ModuleBuilderMethodsOverride::ResolveMethod_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMethod(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::ResolveField_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses ModuleBuilderMethodsOverride::ResolveField_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveField(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::ResolveType_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses ModuleBuilderMethodsOverride::ResolveType_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveType(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::ResolveMember_1 ($metadataToken, $genericTypeArguments, $genericMethodArguments)
	 * @uses ModuleBuilderMethodsOverride::ResolveMember_2 ($metadataToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ResolveMember(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetFields_1 ($bindingFlags)
	 * @uses ModuleBuilderMethodsOverride::GetFields_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFields(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetField_1 ($name, $bindingAttr)
	 * @uses ModuleBuilderMethodsOverride::GetField_2 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetField(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMethods_1 ($bindingFlags)
	 * @uses ModuleBuilderMethodsOverride::GetMethods_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethods(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::DefineType_1 ($name, $attr, $parent, $packingSize, $typesize)
	 * @uses ModuleBuilderMethodsOverride::DefineType_2 ($name, $attr, $parent, $interfaces)
	 * @uses ModuleBuilderMethodsOverride::DefineType_3 ($name)
	 * @uses ModuleBuilderMethodsOverride::DefineType_4 ($name, $attr)
	 * @uses ModuleBuilderMethodsOverride::DefineType_5 ($name, $attr, $parent)
	 * @uses ModuleBuilderMethodsOverride::DefineType_6 ($name, $attr, $parent, $typesize)
	 * @uses ModuleBuilderMethodsOverride::DefineType_7 ($name, $attr, $parent, $packsize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineType(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $visibility
	 * @param \System\Type $underlyingType
	 * @return \System\Reflection\Emit\EnumBuilder
	 */
	public  function DefineEnum($name, $visibility, $underlyingType){}
	/**
	 * @uses ModuleBuilderMethodsOverride::DefinePInvokeMethod_1 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)
	 * @uses ModuleBuilderMethodsOverride::DefinePInvokeMethod_2 ($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefinePInvokeMethod(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::DefineGlobalMethod_1 ($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)
	 * @uses ModuleBuilderMethodsOverride::DefineGlobalMethod_2 ($name, $attributes, $returnType, $parameterTypes)
	 * @uses ModuleBuilderMethodsOverride::DefineGlobalMethod_3 ($name, $attributes, $callingConvention, $returnType, $parameterTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function DefineGlobalMethod(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $requiredReturnTypeCustomModifiers
	 * @param \System\Type[] $optionalReturnTypeCustomModifiers
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $requiredParameterTypeCustomModifiers
	 * @param \System\Type[][] $optionalParameterTypeCustomModifiers
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineGlobalMethodNoLock($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public  function CreateGlobalFunctions(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateGlobalFunctionsNoLock(){}
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
	 * @uses ModuleBuilderMethodsOverride::GetTypeTokenInternal_1 ($type)
	 * @uses ModuleBuilderMethodsOverride::GetTypeTokenInternal_2 ($type, $getGenericDefinition)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetTypeTokenInternal(mixed ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Int32|int
	 */
	protected  function GetTypeToken($type){}
	/**
	 * @param \System\Type $type
	 * @param \System\Boolean $getGenericDefinition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeTokenWorkerNoLock($type, $getGenericDefinition){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Int32|int
	 */
	protected  function GetMethodToken($method){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Boolean $getGenericTypeDefinition
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMethodTokenNoLock($method, $getGenericTypeDefinition){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Type[] $optionalParameterTypes
	 * @param \System\Boolean $useMethodDef
	 * @return \System\Int32|int
	 */
	protected  function GetMethodTokenInternal($method, $optionalParameterTypes, $useMethodDef){}
	/**
	 * @param \System\Type $arrayClass
	 * @param \System\String|string $methodName
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $parameterTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetArrayMethodTokenNoLock($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @param \System\Type $arrayClass
	 * @param \System\String|string $methodName
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $parameterTypes
	 * @return \System\Reflection\MethodInfo
	 */
	public  function GetArrayMethod($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @return \System\Int32|int
	 */
	protected  function GetConstructorToken($con){}
	/**
	 * @param \System\Reflection\FieldInfo $field
	 * @return \System\Int32|int
	 */
	protected  function GetFieldToken($field){}
	/**
	 * @param \System\Reflection\FieldInfo $field
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFieldTokenNoLock($field){}
	/**
	 * @param \System\Reflection\Emit\SignatureHelper $sigHelper
	 * @return \System\Int32|int
	 */
	protected  function GetSignatureToken($sigHelper){}
	/**
	 * @uses ModuleBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses ModuleBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @uses ModuleBuilderMethodsOverride::GetMethod_1 ($name)
	 * @uses ModuleBuilderMethodsOverride::GetMethod_2 ($name, $types)
	 * @uses ModuleBuilderMethodsOverride::GetMethod_3 ($name, $bindingAttr, $binder, $callConvention, $types, $modifiers)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetMethod(mixed ...$args){}
}

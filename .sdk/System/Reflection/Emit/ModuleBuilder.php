<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ModuleBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $strFormat
	 * @param \System\Type $baseType
	 * @return \System\Type
	 */
	#[MethodOverride]private static function GetType_1 ($strFormat, $baseType){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Runtime\CompilerServices\QCallModule $refedModule
	 * @param \System\Int32|int $tr
	 * @param \System\Int32|int $defToken
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetMemberRef_1 ($module, $refedModule, $tr, $defToken){}
	/**
	 * @deprecated
	 * @param \System\Reflection\Module $refedModule
	 * @param \System\Int32|int $tr
	 * @param \System\Int32|int $defToken
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetMemberRef_2 ($refedModule, $tr, $defToken){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tr
	 * @param \System\String|string $methodName
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetMemberRefFromSignature_1 ($module, $tr, $methodName, $signature, $length){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $tr
	 * @param \System\String|string $methodName
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetMemberRefFromSignature_2 ($tr, $methodName, $signature, $length){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tr
	 * @param \System\RuntimeMethodHandleInternal $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetMemberRefOfMethodInfo_1 ($module, $tr, $method){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $tr
	 * @param \System\Reflection\RuntimeMethodInfo $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetMemberRefOfMethodInfo_2 ($tr, $method){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $tr
	 * @param \System\Reflection\RuntimeConstructorInfo $method
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetMemberRefOfMethodInfo_3 ($tr, $method){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkType
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $declaringType
	 * @param \System\Int32|int $tkField
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetMemberRefOfFieldInfo_1 ($module, $tkType, $declaringType, $tkField){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $tkType
	 * @param \System\RuntimeTypeHandle $declaringType
	 * @param \System\Reflection\RuntimeFieldInfo $runtimeField
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetMemberRefOfFieldInfo_2 ($tkType, $declaringType, $runtimeField){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $pModule
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetTokenFromTypeSpec_1 ($pModule, $signature, $length){}
	/**
	 * @deprecated
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTokenFromTypeSpec_2 ($signature, $length){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $tkTypeSpec
	 * @param \System\String|string $methodName
	 * @param \System\Byte $signature
	 * @param \System\Int32|int $sigLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetArrayMethodToken_1 ($module, $tkTypeSpec, $methodName, $signature, $sigLength){}
	/**
	 * @deprecated
	 * @param \System\Type $arrayClass
	 * @param \System\String|string $methodName
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetArrayMethodToken_2 ($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\String|string $str
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function GetStringConstant_1 ($module, $str, $length){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetStringConstant_2 ($str){}
	/**
	 * @deprecated
	 * @param \System\Reflection\CallingConventions $call
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredCustomModifiers [generic: ][]
	 * @param \System\Type $optionalCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypes
	 * @param \System\Int32|int $cGenericParameters
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected function GetMemberRefSignature_1 ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Int32|int $cGenericParameters
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	#[MethodOverride]protected function GetMemberRefSignature_2 ($method, $cGenericParameters){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Reflection\Emit\PackingSize $packingSize
	 * @param \System\Int32|int $typesize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_1 ($name, $attr, $parent, $packingSize, $typesize){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Type $interfaces
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_2 ($name, $attr, $parent, $interfaces){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_3 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_4 ($name, $attr){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_5 ($name, $attr, $parent){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Int32|int $typesize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_6 ($name, $attr, $parent, $typesize){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $attr
	 * @param \System\Type $parent
	 * @param \System\Reflection\Emit\PackingSize $packsize
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	#[MethodOverride]public function DefineType_7 ($name, $attr, $parent, $packsize){}
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
	#[MethodOverride]public function DefinePInvokeMethod_1 ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet){}
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
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $requiredReturnTypeCustomModifiers
	 * @param \System\Type $optionalReturnTypeCustomModifiers
	 * @param \System\Type $parameterTypes
	 * @param \System\Type $requiredParameterTypeCustomModifiers [generic: ][]
	 * @param \System\Type $optionalParameterTypeCustomModifiers [generic: ][]
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineGlobalMethod_1 ($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineGlobalMethod_2 ($name, $attributes, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\Emit\MethodBuilder
	 */
	#[MethodOverride]public function DefineGlobalMethod_3 ($name, $attributes, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetTypeTokenInternal_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @param \System\Boolean|bool $getGenericDefinition
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function GetTypeTokenInternal_2 ($type, $getGenericDefinition){}
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
class ModuleBuilder extends \System\Reflection\Module implements
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\ISerializable
{
	use ModuleBuilderOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Reflection\RuntimeModule
	 */
	protected $_internalModule;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullyQualifiedName;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MDStreamVersion;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $ModuleVersionId;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MetadataToken;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ScopeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $Assembly;
	/**
	 * @property
	 * @var \System\ModuleHandle
	 * @since readonly
	 */
	public $ModuleHandle;
	/**
	 * @property
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @since readonly
	 */
	public $CustomAttributes;
	/**
	 * @param \System\String|string $typeName
	 * @return \System\String|string
	 */
	protected static function UnmangleTypeName($typeName){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Type $type
	 * @return \System\Void|void
	 */
	protected function AddType($name, $type){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Type $enclosingType
	 * @return \System\Void|void
	 */
	protected function CheckTypeNameConflict($strTypeName, $enclosingType){}
	private static function GetTypeRef($module, $strFullName, $refedModule, $tkResolution){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ModuleBuilderOverride::GetMemberRef_1 <br>private , args: ($module, $refedModule, $tr, $defToken)<br>
	 * @uses ModuleBuilderOverride::GetMemberRef_2 <br>private , args: ($refedModule, $tr, $defToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMemberRef (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ModuleBuilderOverride::GetMemberRefFromSignature_1 <br>private , args: ($module, $tr, $methodName, $signature, $length)<br>
	 * @uses ModuleBuilderOverride::GetMemberRefFromSignature_2 <br>private , args: ($tr, $methodName, $signature, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMemberRefFromSignature (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ModuleBuilderOverride::GetMemberRefOfMethodInfo_1 <br>private , args: ($module, $tr, $method)<br>
	 * @uses ModuleBuilderOverride::GetMemberRefOfMethodInfo_2 <br>private , args: ($tr, $method)<br>
	 * @uses ModuleBuilderOverride::GetMemberRefOfMethodInfo_3 <br>private , args: ($tr, $method)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMemberRefOfMethodInfo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ModuleBuilderOverride::GetMemberRefOfFieldInfo_1 <br>private , args: ($module, $tkType, $declaringType, $tkField)<br>
	 * @uses ModuleBuilderOverride::GetMemberRefOfFieldInfo_2 <br>private , args: ($tkType, $declaringType, $runtimeField)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetMemberRefOfFieldInfo (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ModuleBuilderOverride::GetTokenFromTypeSpec_1 <br>private , args: ($pModule, $signature, $length)<br>
	 * @uses ModuleBuilderOverride::GetTokenFromTypeSpec_2 <br>private , args: ($signature, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function GetTokenFromTypeSpec (\override ...$args){}
	/**
	 * @uses ModuleBuilderOverride::GetArrayMethodToken_1 <br>private , args: ($module, $tkTypeSpec, $methodName, $signature, $sigLength)<br>
	 * @uses ModuleBuilderOverride::GetArrayMethodToken_2 <br>protected , args: ($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetArrayMethodToken (\override ...$args){}
	/**
	 * @uses ModuleBuilderOverride::GetStringConstant_1 <br>private , args: ($module, $str, $length)<br>
	 * @uses ModuleBuilderOverride::GetStringConstant_2 <br>protected , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetStringConstant (\override ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\QCallModule $module
	 * @param \System\Int32|int $fdToken
	 * @param \System\Byte $data
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	protected static function SetFieldRVAContent($module, $fdToken, $data, $length){}
	/**
	 * @param \System\String|string $strTypeName
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Type
	 */
	protected function FindTypeBuilderWithName($strTypeName, $ignoreCase){}
	private function GetTypeRefNested($type, $refedModule){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @param \System\Boolean|bool $usingRef
	 * @return \System\Int32|int
	 */
	protected function InternalGetConstructorToken($con, $usingRef){}
	private static function GetRuntimeModuleFromModule($m){}
	private function GetMemberRefToken($method, $optionalParameterTypes){}
	/**
	 * @uses ModuleBuilderOverride::GetMemberRefSignature_1 <br>protected , args: ($call, $returnType, $parameterTypes, $requiredCustomModifiers, $optionalCustomModifiers, $optionalParameterTypes, $cGenericParameters)<br>
	 * @uses ModuleBuilderOverride::GetMemberRefSignature_2 <br>protected , args: ($method, $cGenericParameters)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\SignatureHelper|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMemberRefSignature (\override ...$args){}
	private static function GetGenericMethodBaseDefinition($methodBase){}
	/**
	 * @return \System\Type[]
	 */
	protected function GetTypesNoLock(){}
	private function GetTypeNoLock($className, $throwOnError, $ignoreCase){}
	/**
	 * @uses ModuleBuilderOverride::DefineType_1 <br>public , args: ($name, $attr, $parent, $packingSize, $typesize)<br>
	 * @uses ModuleBuilderOverride::DefineType_2 <br>public , args: ($name, $attr, $parent, $interfaces)<br>
	 * @uses ModuleBuilderOverride::DefineType_3 <br>public , args: ($name)<br>
	 * @uses ModuleBuilderOverride::DefineType_4 <br>public , args: ($name, $attr)<br>
	 * @uses ModuleBuilderOverride::DefineType_5 <br>public , args: ($name, $attr, $parent)<br>
	 * @uses ModuleBuilderOverride::DefineType_6 <br>public , args: ($name, $attr, $parent, $typesize)<br>
	 * @uses ModuleBuilderOverride::DefineType_7 <br>public , args: ($name, $attr, $parent, $packsize)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\TypeBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineType (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\TypeAttributes $visibility
	 * @param \System\Type $underlyingType
	 * @return \System\Reflection\Emit\EnumBuilder
	 */
	public function DefineEnum($name, $visibility, $underlyingType){}
	/**
	 * @uses ModuleBuilderOverride::DefinePInvokeMethod_1 <br>public , args: ($name, $dllName, $entryName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)<br>
	 * @uses ModuleBuilderOverride::DefinePInvokeMethod_2 <br>public , args: ($name, $dllName, $attributes, $callingConvention, $returnType, $parameterTypes, $nativeCallConv, $nativeCharSet)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\MethodBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefinePInvokeMethod (\override ...$args){}
	/**
	 * @uses ModuleBuilderOverride::DefineGlobalMethod_1 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers)<br>
	 * @uses ModuleBuilderOverride::DefineGlobalMethod_2 <br>public , args: ($name, $attributes, $returnType, $parameterTypes)<br>
	 * @uses ModuleBuilderOverride::DefineGlobalMethod_3 <br>public , args: ($name, $attributes, $callingConvention, $returnType, $parameterTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\Emit\MethodBuilder|mixed|\override
	 */
	#[MethodOverridePublic]function DefineGlobalMethod (\override ...$args){}
	private function DefineGlobalMethodNoLock($name, $attributes, $callingConvention, $returnType, $requiredReturnTypeCustomModifiers, $optionalReturnTypeCustomModifiers, $parameterTypes, $requiredParameterTypeCustomModifiers, $optionalParameterTypeCustomModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public function CreateGlobalFunctions(){}
	private function CreateGlobalFunctionsNoLock(){}
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
	/**
	 * @uses ModuleBuilderOverride::GetTypeTokenInternal_1 <br>protected , args: ($type)<br>
	 * @uses ModuleBuilderOverride::GetTypeTokenInternal_2 <br>private , args: ($type, $getGenericDefinition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetTypeTokenInternal (\override ...$args){}
	/**
	 * @param \System\Type $type
	 * @return \System\Int32|int
	 */
	protected function GetTypeToken($type){}
	private function GetTypeTokenWorkerNoLock($type, $getGenericDefinition){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @return \System\Int32|int
	 */
	protected function GetMethodToken($method){}
	private function GetMethodTokenNoLock($method, $getGenericTypeDefinition){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @param \System\Type $optionalParameterTypes
	 * @param \System\Boolean|bool $useMethodDef
	 * @return \System\Int32|int
	 */
	protected function GetMethodTokenInternal($method, $optionalParameterTypes, $useMethodDef){}
	private function GetArrayMethodTokenNoLock($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @param \System\Type $arrayClass
	 * @param \System\String|string $methodName
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type $parameterTypes
	 * @return \System\Reflection\MethodInfo
	 */
	public function GetArrayMethod($arrayClass, $methodName, $callingConvention, $returnType, $parameterTypes){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @return \System\Int32|int
	 */
	protected function GetConstructorToken($con){}
	/**
	 * @param \System\Reflection\FieldInfo $field
	 * @return \System\Int32|int
	 */
	protected function GetFieldToken($field){}
	private function GetFieldTokenNoLock($field){}
	/**
	 * @param \System\Reflection\Emit\SignatureHelper $sigHelper
	 * @return \System\Int32|int
	 */
	protected function GetSignatureToken($sigHelper){}
	/**
	 * @uses ModuleBuilderOverride::SetCustomAttribute_1 <br>public , args: ($con, $binaryAttribute)<br>
	 * @uses ModuleBuilderOverride::SetCustomAttribute_2 <br>public , args: ($customBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCustomAttribute (\override ...$args){}
}
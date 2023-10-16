<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MethodBuilderMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_1($obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_2($obj, $parameters){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride] public  function GetILGenerator_1(){}
	/**
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride] public  function GetILGenerator_2($size){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public  function CreateDelegate_1($delegateType){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public  function CreateDelegate_2($delegateType, $target){}
	/**
	 * @return \System\Reflection\T
	 */
	#[MethodOverride] public  function CreateDelegate_3(){}
	/**
	 * @return \System\Reflection\T
	 */
	#[MethodOverride] public  function CreateDelegate_4($target){}
}
/**
 */
class MethodBuilder extends \System\Reflection\MethodInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $m_strName;
	/**
	 * @var \System\Reflection\Emit\TypeBuilder
	 * @field
	 */
	protected $m_containingType;
	/**
	 * @var \System\Reflection\Emit\LocalSymInfo
	 * @field
	 */
	protected $m_localSymInfo;
	/**
	 * @var \System\Reflection\Emit\ILGenerator
	 * @field
	 */
	protected $m_ilGenerator;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_bIsBaked;
	/**
	 * @var \System\Type[]
	 * @field
	 */
	protected $m_parameterTypes;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_canBeRuntimeImpl;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_isDllImport;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @property
	 */
	public readonly $ReturnTypeCustomAttributes;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReflectedType;
	/**
	 * @var \System\Reflection\MethodAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Reflection\CallingConventions
	 * @property
	 */
	public readonly $CallingConvention;
	/**
	 * @var \System\RuntimeMethodHandle
	 * @property
	 */
	public readonly $MethodHandle;
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
	public readonly $ReturnType;
	/**
	 * @var \System\Reflection\ParameterInfo
	 * @property
	 */
	public readonly $ReturnParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericMethodDefinition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ContainsGenericParameters;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericMethod;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $InitLocals;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Reflection\MethodImplAttributes
	 * @property
	 */
	public readonly $MethodImplementationFlags;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAbstract;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsConstructor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFinal;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsHideBySig;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsStatic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsVirtual;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamily;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamilyAndAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFamilyOrAssembly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPrivate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPublic;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsConstructedGenericMethod;
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
	 * @param \System\Reflection\Emit\ILGenerator $il
	 * @return \System\Void|void
	 */
	protected  function CreateMethodBodyHelper($il){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReleaseBakedStructures(){}
	/**
	 * @param \System\Reflection\MethodBase $method
	 * @return \System\Type
	 */
	protected static function GetMethodBaseReturnType($method){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Void|void
	 */
	protected  function SetToken($token){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function GetBody(){}
	/**
	 * @return \System\Int32[]
	 */
	protected  function GetTokenFixups(){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected  function GetMethodSignature(){}
	/**
	 * @param \System\Int32& $signatureLength
	 * @return \System\Byte[]
	 */
	protected  function GetLocalSignature($signatureLength){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetMaxStack(){}
	/**
	 * @return \System\Reflection\Emit\ExceptionHandler[]
	 */
	protected  function GetExceptionHandlers(){}
	/**
	 * @param \System\Reflection\Emit\__ExceptionInfo[] $excp
	 * @return \System\Int32|int
	 */
	protected static function CalculateNumberOfExceptions($excp){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsTypeCreated(){}
	/**
	 * @return \System\Reflection\Emit\TypeBuilder
	 */
	protected  function GetTypeBuilder(){}
	/**
	 * @return \System\Reflection\Emit\ModuleBuilder
	 */
	protected  function GetModuleBuilder(){}
	/**
	 * @uses MethodBuilderMethodsOverride::Invoke_1 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @uses MethodBuilderMethodsOverride::Invoke_2 ($obj, $parameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @uses MethodBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MethodBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\String[] $names
	 * @return \System\Reflection\Emit\GenericTypeParameterBuilder[]
	 */
	public  function DefineGenericParameters($names){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ThrowIfGeneric(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetToken(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTokenNoLock(){}
	/**
	 * @param \System\Type[] $parameterTypes
	 * @return \System\Void|void
	 */
	public  function SetParameters($parameterTypes){}
	/**
	 * @param \System\Type $returnType
	 * @return \System\Void|void
	 */
	public  function SetReturnType($returnType){}
	/**
	 * @param \System\Type $returnType
	 * @param \System\Type[] $returnTypeRequiredCustomModifiers
	 * @param \System\Type[] $returnTypeOptionalCustomModifiers
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Type[][] $parameterTypeRequiredCustomModifiers
	 * @param \System\Type[][] $parameterTypeOptionalCustomModifiers
	 * @return \System\Void|void
	 */
	public  function SetSignature($returnType, $returnTypeRequiredCustomModifiers, $returnTypeOptionalCustomModifiers, $parameterTypes, $parameterTypeRequiredCustomModifiers, $parameterTypeOptionalCustomModifiers){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @param \System\String|string $strParamName
	 * @return \System\Reflection\Emit\ParameterBuilder
	 */
	public  function DefineParameter($position, $attributes, $strParamName){}
	/**
	 * @param \System\Reflection\MethodImplAttributes $attributes
	 * @return \System\Void|void
	 */
	public  function SetImplementationFlags($attributes){}
	/**
	 * @uses MethodBuilderMethodsOverride::GetILGenerator_1 ()
	 * @uses MethodBuilderMethodsOverride::GetILGenerator_2 ($size)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetILGenerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfShouldNotHaveBody(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InitLocals(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_InitLocals($value){}
	/**
	 * @return \System\Reflection\Module
	 */
	protected  function GetModule(){}
	/**
	 * @uses MethodBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses MethodBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsKnownCA($con){}
	/**
	 * @param \System\Reflection\ConstructorInfo $con
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ParseCA($con){}
	/**
	 * @uses MethodBuilderMethodsOverride::CreateDelegate_1 ($delegateType)
	 * @uses MethodBuilderMethodsOverride::CreateDelegate_2 ($delegateType, $target)
	 * @uses MethodBuilderMethodsOverride::CreateDelegate_3 ()
	 * @uses MethodBuilderMethodsOverride::CreateDelegate_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateDelegate(mixed ...$args){}
}

<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConstructorBuilderMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_1($obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_2($invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_3($parameters){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_4($obj, $parameters){}
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
	#[MethodOverride] public  function GetILGenerator_2($streamSize){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
}
/**
 */
class ConstructorBuilder extends \System\Reflection\ConstructorInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_isDefaultConstructor;
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
	public readonly $ReflectedType;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $DeclaringType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Reflection\MethodAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\RuntimeMethodHandle
	 * @property
	 */
	public readonly $MethodHandle;
	/**
	 * @var \System\Reflection\CallingConventions
	 * @property
	 */
	public readonly $CallingConvention;
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericMethod;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeBuilder(){}
	/**
	 * @return \System\Reflection\Emit\SignatureHelper
	 */
	protected  function GetMethodSignature(){}
	/**
	 * @uses ConstructorBuilderMethodsOverride::Invoke_1 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @uses ConstructorBuilderMethodsOverride::Invoke_2 ($invokeAttr, $binder, $parameters, $culture)
	 * @uses ConstructorBuilderMethodsOverride::Invoke_3 ($parameters)
	 * @uses ConstructorBuilderMethodsOverride::Invoke_4 ($obj, $parameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @uses ConstructorBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses ConstructorBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Int32|int $iSequence
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @param \System\String|string $strParamName
	 * @return \System\Reflection\Emit\ParameterBuilder
	 */
	public  function DefineParameter($iSequence, $attributes, $strParamName){}
	/**
	 * @uses ConstructorBuilderMethodsOverride::GetILGenerator_1 ()
	 * @uses ConstructorBuilderMethodsOverride::GetILGenerator_2 ($streamSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetILGenerator(mixed ...$args){}
	/**
	 * @uses ConstructorBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses ConstructorBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodImplAttributes $attributes
	 * @return \System\Void|void
	 */
	public  function SetImplementationFlags($attributes){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InitLocals(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_InitLocals($value){}
}

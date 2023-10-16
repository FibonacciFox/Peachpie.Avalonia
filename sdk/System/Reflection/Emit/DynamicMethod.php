<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DynamicMethodMethodsOverride
{
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
	#[MethodOverride] public  function GetCustomAttributes_1($attributeType, $inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($inherit){}
	/**
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride] public  function GetILGenerator_1(){}
	/**
	 * @return \System\Reflection\Emit\ILGenerator
	 */
	#[MethodOverride] public  function GetILGenerator_2($streamSize){}
}
/**
 */
class DynamicMethod extends \System\Reflection\MethodInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\IRuntimeMethodInfo
	 * @field
	 */
	protected $m_methodHandle;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_skipVisibility;
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected $m_typeOwner;
	/**
	 * @var \System\Reflection\Emit\DynamicResolver
	 * @field
	 */
	protected $m_resolver;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_restrictedSkipVisibility;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
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
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
	/**
	 * @var \System\RuntimeMethodHandle
	 * @property
	 */
	public readonly $MethodHandle;
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
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @property
	 */
	public readonly $ReturnTypeCustomAttributes;
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckConsistency($attributes, $callingConvention){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDynamicMethodsModule(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\MethodAttributes $attributes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @param \System\Type $returnType
	 * @param \System\Type[] $signature
	 * @param \System\Type $owner
	 * @param \System\Reflection\Module $m
	 * @param \System\Boolean $skipVisibility
	 * @param \System\Boolean $transparentMethod
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Init($name, $attributes, $callingConvention, $returnType, $signature, $owner, $m, $skipVisibility, $transparentMethod){}
	/**
	 * @uses DynamicMethodMethodsOverride::CreateDelegate_1 ($delegateType)
	 * @uses DynamicMethodMethodsOverride::CreateDelegate_2 ($delegateType, $target)
	 * @uses DynamicMethodMethodsOverride::CreateDelegate_3 ()
	 * @uses DynamicMethodMethodsOverride::CreateDelegate_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateDelegate(mixed ...$args){}
	/**
	 * @return \System\RuntimeMethodHandle
	 */
	protected  function GetMethodDescriptor(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Invoker(){}
	/**
	 * @return \System\Signature
	 */
	protected  function get_Signature(){}
	/**
	 * @uses DynamicMethodMethodsOverride::Invoke_1 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @uses DynamicMethodMethodsOverride::Invoke_2 ($obj, $parameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @param \System\Reflection\Emit\DynamicMethod $mi
	 * @param \System\Int32|int $argCount
	 * @param \System\Object|object $obj
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object[] $parameters
	 * @param \System\Globalization\CultureInfo $culture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvokeWithManyArguments($mi, $argCount, $obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @uses DynamicMethodMethodsOverride::GetCustomAttributes_1 ($attributeType, $inherit)
	 * @uses DynamicMethodMethodsOverride::GetCustomAttributes_2 ($inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @param \System\String|string $parameterName
	 * @return \System\Reflection\Emit\ParameterBuilder
	 */
	public  function DefineParameter($position, $attributes, $parameterName){}
	/**
	 * @return \System\Reflection\Emit\DynamicILInfo
	 */
	public  function GetDynamicILInfo(){}
	/**
	 * @uses DynamicMethodMethodsOverride::GetILGenerator_1 ()
	 * @uses DynamicMethodMethodsOverride::GetILGenerator_2 ($streamSize)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetILGenerator(mixed ...$args){}
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
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetMethodInfo(){}
}

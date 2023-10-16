<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MethodOnTypeBuilderInstantiationMethodsOverride
{
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_1($obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_2($obj, $parameters){}
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
class MethodOnTypeBuilderInstantiation extends \System\Reflection\MethodInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MethodInfo
	 * @field
	 */
	protected $m_method;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Reflection\Emit\TypeBuilderInstantiation $type
	 * @return \System\Reflection\MethodInfo
	 */
	protected static function GetMethod($method, $type){}
	/**
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::Invoke_1 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::Invoke_2 ($obj, $parameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::CreateDelegate_1 ($delegateType)
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::CreateDelegate_2 ($delegateType, $target)
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::CreateDelegate_3 ()
	 * @uses MethodOnTypeBuilderInstantiationMethodsOverride::CreateDelegate_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateDelegate(mixed ...$args){}
}

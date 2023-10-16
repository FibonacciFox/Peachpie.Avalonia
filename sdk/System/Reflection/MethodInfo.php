<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MethodInfoMethodsOverride
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
	#[MethodOverride] public  function Invoke_1($obj, $parameters){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Invoke_2($obj, $invokeAttr, $binder, $parameters, $culture){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_1($inherit){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public  function GetCustomAttributes_2($attributeType, $inherit){}
}
/**
 */
class MethodInfo extends \System\Reflection\MethodBase implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
	/**
	 * @var \System\Reflection\ParameterInfo
	 * @property
	 */
	public readonly $ReturnParameter;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ReturnType;
	/**
	 * @var \System\Reflection\ICustomAttributeProvider
	 * @property
	 */
	public readonly $ReturnTypeCustomAttributes;
	/**
	 * @var \System\Reflection\MethodAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Reflection\MethodImplAttributes
	 * @property
	 */
	public readonly $MethodImplementationFlags;
	/**
	 * @var \System\Reflection\CallingConventions
	 * @property
	 */
	public readonly $CallingConvention;
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
	 * @return \System\Reflection\ParameterInfo
	 */
	public  function get_ReturnParameter(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ReturnType(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function GetGenericMethodDefinition(){}
	/**
	 * @param \System\Type[] $typeArguments
	 * @return \System\Reflection\MethodInfo
	 */
	public  function MakeGenericMethod($typeArguments){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	public  function GetBaseDefinition(){}
	/**
	 * @return \System\Reflection\ICustomAttributeProvider
	 */
	public  function get_ReturnTypeCustomAttributes(){}
	/**
	 * @uses MethodInfoMethodsOverride::CreateDelegate_1 ($delegateType)
	 * @uses MethodInfoMethodsOverride::CreateDelegate_2 ($delegateType, $target)
	 * @uses MethodInfoMethodsOverride::CreateDelegate_3 ()
	 * @uses MethodInfoMethodsOverride::CreateDelegate_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateDelegate(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodInfo $left
	 * @param \System\Reflection\MethodInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\MethodInfo $left
	 * @param \System\Reflection\MethodInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_GenericParameterCount(){}
	/**
	 * @uses MethodInfoMethodsOverride::Invoke_1 ($obj, $parameters)
	 * @uses MethodInfoMethodsOverride::Invoke_2 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @uses MethodInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MethodInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}

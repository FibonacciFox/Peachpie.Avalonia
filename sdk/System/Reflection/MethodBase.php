<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MethodBaseMethodsOverride
{
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public static function GetMethodFromHandle_1($handle){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	#[MethodOverride] public static function GetMethodFromHandle_2($handle, $declaringType){}
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
class MethodBase extends \System\Reflection\MemberInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
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
	 * @uses MethodBaseMethodsOverride::GetMethodFromHandle_1 ($handle)
	 * @uses MethodBaseMethodsOverride::GetMethodFromHandle_2 ($handle, $declaringType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMethodFromHandle(mixed ...$args){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public static function GetCurrentMethod(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetMethodDesc(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	protected  function GetParametersNoCopy(){}
	/**
	 * @return \System\Type[]
	 */
	protected  function GetParameterTypes(){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	public  function GetParameters(){}
	/**
	 * @return \System\Reflection\MethodAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Reflection\MethodImplAttributes
	 */
	public  function get_MethodImplementationFlags(){}
	/**
	 * @return \System\Reflection\MethodImplAttributes
	 */
	public  function GetMethodImplementationFlags(){}
	/**
	 * @return \System\Reflection\MethodBody
	 */
	public  function GetMethodBody(){}
	/**
	 * @return \System\Reflection\CallingConventions
	 */
	public  function get_CallingConvention(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAbstract(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsConstructor(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFinal(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsHideBySig(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSpecialName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsStatic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVirtual(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamily(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamilyAndAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFamilyOrAssembly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPrivate(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPublic(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsConstructedGenericMethod(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericMethod(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericMethodDefinition(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetGenericArguments(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ContainsGenericParameters(){}
	/**
	 * @uses MethodBaseMethodsOverride::Invoke_1 ($obj, $parameters)
	 * @uses MethodBaseMethodsOverride::Invoke_2 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @return \System\RuntimeMethodHandle
	 */
	public  function get_MethodHandle(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecurityCritical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecuritySafeCritical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSecurityTransparent(){}
	/**
	 * @param \System\Reflection\MethodBase $left
	 * @param \System\Reflection\MethodBase $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\MethodBase $left
	 * @param \System\Reflection\MethodBase $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Text\ValueStringBuilder& $sbParamList
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Reflection\CallingConventions $callingConvention
	 * @return \System\Void|void
	 */
	protected static function AppendParameters($sbParamList, $parameterTypes, $callingConvention){}
	/**
	 * @param \System\Object|object $target
	 * @return \System\Void|void
	 */
	protected  function ValidateInvokeTarget($target){}
	/**
	 * @param \System\Span_1 $copyOfParameters
	 * @param \System\IntPtr* $byrefParameters
	 * @param \System\Span_1 $shouldCopyBack
	 * @param \System\ReadOnlySpan_1 $parameters
	 * @param \System\RuntimeType[] $sigTypes
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @return \System\Void|void
	 */
	protected  function CheckArguments($copyOfParameters, $byrefParameters, $shouldCopyBack, $parameters, $sigTypes, $binder, $culture, $invokeAttr){}
	/**
	 * @uses MethodBaseMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MethodBaseMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}

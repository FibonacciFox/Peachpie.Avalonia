<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeMethodInfoMethodsOverride
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
}
/**
 */
class RuntimeMethodInfo extends \System\Reflection\MethodInfo implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\IRuntimeMethodInfo
{
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
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @var \System\Reflection\ParameterInfo
	 * @property
	 */
	public readonly $ReturnParameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCollectible;
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
	 * @return \System\Reflection\InvocationFlags
	 */
	protected  function get_InvocationFlags(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Invoker(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Value(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReflectedTypeInternal(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FetchNonReturnParameters(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FetchReturnParameter(){}
	/**
	 * @return \System\Signature
	 */
	protected  function get_Signature(){}
	/**
	 * @return \System\Reflection\BindingFlags
	 */
	protected  function get_BindingFlags(){}
	/**
	 * @return \System\Reflection\RuntimeMethodInfo
	 */
	protected  function GetParentDefinition(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetDeclaringTypeInternal(){}
	/**
	 * @uses RuntimeMethodInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeMethodInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetRuntimeType(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function get_ArgumentTypes(){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Reflection\BindingFlags $invokeAttr
	 * @param \System\Reflection\Binder $binder
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	protected  function InvokeOneParameter($obj, $invokeAttr, $binder, $parameter, $culture){}
	/**
	 * @uses RuntimeMethodInfoMethodsOverride::CreateDelegate_1 ($delegateType)
	 * @uses RuntimeMethodInfoMethodsOverride::CreateDelegate_2 ($delegateType, $target)
	 * @uses RuntimeMethodInfoMethodsOverride::CreateDelegate_3 ()
	 * @uses RuntimeMethodInfoMethodsOverride::CreateDelegate_4 ($target)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateDelegate(mixed ...$args){}
	/**
	 * @param \System\Type $delegateType
	 * @param \System\Object|object $firstArgument
	 * @param \System\DelegateBindingFlags $bindingFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateDelegateInternal($delegateType, $firstArgument, $bindingFlags){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function GetGenericArgumentsInternal(){}
	/**
	 * @param \System\Threading\StackCrawlMark& $stackMark
	 * @return \System\Reflection\MethodBase
	 */
	protected static function InternalGetCurrentMethod($stackMark){}
	/**
	 * @param \System\Reflection\MethodInfo $methodInfo
	 * @param \System\Reflection\InvocationFlags& $flagsToUpdate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ComputeAndUpdateInvocationFlags($methodInfo, $flagsToUpdate){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowNoInvokeException(){}
	/**
	 * @uses RuntimeMethodInfoMethodsOverride::Invoke_1 ($obj, $invokeAttr, $binder, $parameters, $culture)
	 * @uses RuntimeMethodInfoMethodsOverride::Invoke_2 ($obj, $parameters)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Invoke(mixed ...$args){}
	/**
	 * @param \System\Reflection\RuntimeMethodInfo $mi
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
}

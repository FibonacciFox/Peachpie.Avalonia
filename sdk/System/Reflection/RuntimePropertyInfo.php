<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimePropertyInfoMethodsOverride
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
	#[MethodOverride] protected  function GetConstantValue_1($raw){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetConstantValue_2(){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_2(){}
	/**
	 * @return \System\Reflection\RuntimeMethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_3($nonPublic){}
	/**
	 * @return \System\Reflection\RuntimeMethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_3($nonPublic){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($obj, $index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_2($obj, $invokeAttr, $binder, $index, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_3($obj){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $value, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value, $invokeAttr, $binder, $index, $culture){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($obj, $value){}
}
/**
 */
class RuntimePropertyInfo extends \System\Reflection\PropertyInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
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
	public readonly $IsCollectible;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Reflection\PropertyAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanRead;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanWrite;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSpecialName;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $GetMethod;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $SetMethod;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @return \System\Signature
	 */
	protected  function get_Signature(){}
	/**
	 * @param \System\Reflection\RuntimePropertyInfo $target
	 * @return \System\Boolean
	 */
	protected  function EqualsSig($target){}
	/**
	 * @return \System\Reflection\BindingFlags
	 */
	protected  function get_BindingFlags(){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimePropertyInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReflectedTypeInternal(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetConstantValue_1 ($raw)
	 * @uses RuntimePropertyInfoMethodsOverride::GetConstantValue_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConstantValue(mixed ...$args){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetAccessors_1 ($nonPublic)
	 * @uses RuntimePropertyInfoMethodsOverride::GetAccessors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAccessors(mixed ...$args){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetGetMethod_1 ($nonPublic)
	 * @uses RuntimePropertyInfoMethodsOverride::GetGetMethod_2 ()
	 * @uses RuntimePropertyInfoMethodsOverride::GetGetMethod_3 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetGetMethod(mixed ...$args){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetSetMethod_1 ($nonPublic)
	 * @uses RuntimePropertyInfoMethodsOverride::GetSetMethod_2 ()
	 * @uses RuntimePropertyInfoMethodsOverride::GetSetMethod_3 ($nonPublic)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSetMethod(mixed ...$args){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	protected  function GetIndexParametersNoCopy(){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::GetValue_1 ($obj, $index)
	 * @uses RuntimePropertyInfoMethodsOverride::GetValue_2 ($obj, $invokeAttr, $binder, $index, $culture)
	 * @uses RuntimePropertyInfoMethodsOverride::GetValue_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses RuntimePropertyInfoMethodsOverride::SetValue_1 ($obj, $value, $index)
	 * @uses RuntimePropertyInfoMethodsOverride::SetValue_2 ($obj, $value, $invokeAttr, $binder, $index, $culture)
	 * @uses RuntimePropertyInfoMethodsOverride::SetValue_3 ($obj, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}

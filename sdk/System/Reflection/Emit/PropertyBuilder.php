<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PropertyBuilderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
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
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo[]
	 */
	#[MethodOverride] public  function GetAccessors_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetGetMethod_2(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_1($nonPublic){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	#[MethodOverride] public  function GetSetMethod_2(){}
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
class PropertyBuilder extends \System\Reflection\PropertyInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\Reflection\Module
	 * @property
	 */
	public readonly $Module;
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
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public  function SetConstant($defaultValue){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @param \System\Reflection\MethodSemanticsAttributes $semantics
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMethodSemantics($mdBuilder, $semantics){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function SetGetMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function SetSetMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function AddOtherMethod($mdBuilder){}
	/**
	 * @uses PropertyBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses PropertyBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::GetValue_1 ($obj, $index)
	 * @uses PropertyBuilderMethodsOverride::GetValue_2 ($obj, $invokeAttr, $binder, $index, $culture)
	 * @uses PropertyBuilderMethodsOverride::GetValue_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::SetValue_1 ($obj, $value, $index)
	 * @uses PropertyBuilderMethodsOverride::SetValue_2 ($obj, $value, $invokeAttr, $binder, $index, $culture)
	 * @uses PropertyBuilderMethodsOverride::SetValue_3 ($obj, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::GetAccessors_1 ($nonPublic)
	 * @uses PropertyBuilderMethodsOverride::GetAccessors_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAccessors(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::GetGetMethod_1 ($nonPublic)
	 * @uses PropertyBuilderMethodsOverride::GetGetMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetGetMethod(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::GetSetMethod_1 ($nonPublic)
	 * @uses PropertyBuilderMethodsOverride::GetSetMethod_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSetMethod(mixed ...$args){}
	/**
	 * @uses PropertyBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses PropertyBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}

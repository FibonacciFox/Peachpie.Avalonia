<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FieldOnTypeBuilderInstantiationMethodsOverride
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $value, $invokeAttr, $binder, $culture){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value){}
}
/**
 */
class FieldOnTypeBuilderInstantiation extends \System\Reflection\FieldInfo implements 
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
	 * @var \System\RuntimeFieldHandle
	 * @property
	 */
	public readonly $FieldHandle;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $FieldType;
	/**
	 * @var \System\Reflection\FieldAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInitOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLiteral;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNotSerialized;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPinvokeImpl;
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
	 * @param \System\Reflection\FieldInfo $Field
	 * @param \System\Reflection\Emit\TypeBuilderInstantiation $type
	 * @return \System\Reflection\FieldInfo
	 */
	protected static function GetField($Field, $type){}
	/**
	 * @return \System\Reflection\FieldInfo
	 */
	protected  function get_FieldInfo(){}
	/**
	 * @uses FieldOnTypeBuilderInstantiationMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses FieldOnTypeBuilderInstantiationMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses FieldOnTypeBuilderInstantiationMethodsOverride::SetValue_1 ($obj, $value, $invokeAttr, $binder, $culture)
	 * @uses FieldOnTypeBuilderInstantiationMethodsOverride::SetValue_2 ($obj, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}

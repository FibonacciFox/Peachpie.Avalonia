<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MdFieldInfoMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($obj){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function GetValue_2($raw){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $value, $invokeAttr, $binder, $culture){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value){}
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
class MdFieldInfo extends \System\Reflection\RuntimeFieldInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
	/**
	 * @var \System\RuntimeType+RuntimeTypeCache
	 * @field
	 */
	protected $m_reflectedTypeCache;
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected $m_declaringType;
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
	 * @var \System\RuntimeFieldHandle
	 * @property
	 */
	public readonly $FieldHandle;
	/**
	 * @var \System\Reflection\FieldAttributes
	 * @property
	 */
	public readonly $Attributes;
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
	public readonly $FieldType;
	/**
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @uses MdFieldInfoMethodsOverride::GetValue_1 ($obj)
	 * @uses MdFieldInfoMethodsOverride::GetValue_2 ($raw)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses MdFieldInfoMethodsOverride::SetValue_1 ($obj, $value, $invokeAttr, $binder, $culture)
	 * @uses MdFieldInfoMethodsOverride::SetValue_2 ($obj, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses MdFieldInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MdFieldInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}

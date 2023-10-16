<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeFieldInfoMethodsOverride
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
	#[MethodOverride] public  function SetValue_1($obj, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_2($obj, $value, $invokeAttr, $binder, $culture){}
}
/**
 */
class RuntimeFieldInfo extends \System\Reflection\FieldInfo implements 
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
	 * @var \System\Reflection\FieldAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $FieldType;
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
	 * @var \System\RuntimeFieldHandle
	 * @property
	 */
	public readonly $FieldHandle;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
	/**
	 * @return \System\Reflection\BindingFlags
	 */
	protected  function get_BindingFlags(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ReflectedTypeInternal(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetDeclaringTypeInternal(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function GetRuntimeType(){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses RuntimeFieldInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeFieldInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @uses RuntimeFieldInfoMethodsOverride::SetValue_1 ($obj, $value)
	 * @uses RuntimeFieldInfoMethodsOverride::SetValue_2 ($obj, $value, $invokeAttr, $binder, $culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}

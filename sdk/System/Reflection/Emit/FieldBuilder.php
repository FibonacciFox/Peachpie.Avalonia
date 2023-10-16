<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FieldBuilderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_1($obj, $val, $invokeAttr, $binder, $culture){}
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
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
}
/**
 */
class FieldBuilder extends \System\Reflection\FieldInfo implements 
	\System\Reflection\ICustomAttributeProvider
{
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
	 * @var \System\Type
	 * @property
	 */
	public readonly $FieldType;
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
	 * @var \System\Reflection\MemberTypes
	 * @property
	 */
	public readonly $MemberType;
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
	 * @param \System\Byte[] $data
	 * @param \System\Int32|int $size
	 * @return \System\Void|void
	 */
	protected  function SetData($data, $size){}
	/**
	 * @uses FieldBuilderMethodsOverride::SetValue_1 ($obj, $val, $invokeAttr, $binder, $culture)
	 * @uses FieldBuilderMethodsOverride::SetValue_2 ($obj, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses FieldBuilderMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses FieldBuilderMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @param \System\Int32|int $iOffset
	 * @return \System\Void|void
	 */
	public  function SetOffset($iOffset){}
	/**
	 * @param \System\Object|object $defaultValue
	 * @return \System\Void|void
	 */
	public  function SetConstant($defaultValue){}
	/**
	 * @uses FieldBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses FieldBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
}

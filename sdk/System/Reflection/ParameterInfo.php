<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ParameterInfoMethodsOverride
{
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
class ParameterInfo extends \System\Object implements 
	\System\Reflection\ICustomAttributeProvider,
	\System\Runtime\Serialization\IObjectReference
{
	/**
	 * @var \System\Reflection\ParameterAttributes
	 * @field
	 */
	protected $AttrsImpl;
	/**
	 * @var \System\Type
	 * @field
	 */
	protected $ClassImpl;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $DefaultValueImpl;
	/**
	 * @var \System\Reflection\MemberInfo
	 * @field
	 */
	protected $MemberImpl;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $NameImpl;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $PositionImpl;
	/**
	 * @var \System\Reflection\ParameterAttributes
	 * @property
	 */
	public readonly $Attributes;
	/**
	 * @var \System\Reflection\MemberInfo
	 * @property
	 */
	public readonly $Member;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ParameterType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Position;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsIn;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLcid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsOptional;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsOut;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRetval;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $DefaultValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $RawDefaultValue;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasDefaultValue;
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
	 * @return \System\Reflection\ParameterAttributes
	 */
	public  function get_Attributes(){}
	/**
	 * @return \System\Reflection\MemberInfo
	 */
	public  function get_Member(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ParameterType(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsIn(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLcid(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOptional(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOut(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRetval(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_DefaultValue(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_RawDefaultValue(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasDefaultValue(){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 * @return \System\Boolean
	 */
	public  function IsDefined($attributeType, $inherit){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_CustomAttributes(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function GetCustomAttributesData(){}
	/**
	 * @uses ParameterInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses ParameterInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetOptionalCustomModifiers(){}
	/**
	 * @return \System\Type[]
	 */
	public  function GetRequiredCustomModifiers(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MetadataToken(){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Object|object
	 */
	public  function GetRealObject($context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MemberInfoMethodsOverride
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
class MemberInfo extends \System\Object implements 
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
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	protected  function CacheEquals($o){}
	/**
	 * @param \System\Reflection\MemberInfo $other
	 * @return \System\Boolean
	 */
	protected  function HasSameMetadataDefinitionAsCore($other){}
	/**
	 * @return \System\Reflection\MemberTypes
	 */
	public  function get_MemberType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Type
	 */
	public  function get_DeclaringType(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ReflectedType(){}
	/**
	 * @return \System\Reflection\Module
	 */
	public  function get_Module(){}
	/**
	 * @param \System\Reflection\MemberInfo $other
	 * @return \System\Boolean
	 */
	public  function HasSameMetadataDefinitionAs($other){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Boolean $inherit
	 * @return \System\Boolean
	 */
	public  function IsDefined($attributeType, $inherit){}
	/**
	 * @uses MemberInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses MemberInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_CustomAttributes(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function GetCustomAttributesData(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCollectible(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MetadataToken(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\Reflection\MemberInfo $left
	 * @param \System\Reflection\MemberInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Reflection\MemberInfo $left
	 * @param \System\Reflection\MemberInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}

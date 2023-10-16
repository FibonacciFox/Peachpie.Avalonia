<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimeParameterInfoMethodsOverride
{
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	#[MethodOverride] protected static function GetParameters_1($method, $member, $sig){}
	/**
	 * @return \System\Reflection\ParameterInfo[]
	 */
	#[MethodOverride] private static function GetParameters_2($methodHandle, $member, $sig, $returnParameter, $fetchReturnParameter){}
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
class RuntimeParameterInfo extends \System\Reflection\ParameterInfo implements 
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
	 * @var \System\Type
	 * @property
	 */
	public readonly $ParameterType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasDefaultValue;
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MetadataToken;
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
	 * @var \System\Collections\Generic\IEnumerable_1[System\Reflection\CustomAttributeData]
	 * @property
	 */
	public readonly $CustomAttributes;
	/**
	 * @uses RuntimeParameterInfoMethodsOverride::GetParameters_1 ($method, $member, $sig)
	 * @uses RuntimeParameterInfoMethodsOverride::GetParameters_2 ($methodHandle, $member, $sig, $returnParameter, $fetchReturnParameter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetParameters(mixed ...$args){}
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Signature $sig
	 * @return \System\Reflection\ParameterInfo
	 */
	protected static function GetReturnParameter($method, $member, $sig){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	protected  function SetName($name){}
	/**
	 * @param \System\Reflection\ParameterAttributes $attributes
	 * @return \System\Void|void
	 */
	protected  function SetAttributes($attributes){}
	/**
	 * @param \System\Boolean $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultValue($raw){}
	/**
	 * @param \System\Boolean $raw
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultValueInternal($raw){}
	/**
	 * @param \System\Reflection\CustomAttributeData $attr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRawDecimalConstant($attr){}
	/**
	 * @param \System\Reflection\CustomAttributeData $attr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRawDateTimeConstant($attr){}
	/**
	 * @param \System\Reflection\CustomAttributeData $attr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRawConstant($attr){}
	/**
	 * @return \System\Reflection\RuntimeModule
	 */
	protected  function GetRuntimeModule(){}
	/**
	 * @uses RuntimeParameterInfoMethodsOverride::GetCustomAttributes_1 ($inherit)
	 * @uses RuntimeParameterInfoMethodsOverride::GetCustomAttributes_2 ($attributeType, $inherit)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCustomAttributes(mixed ...$args){}
}

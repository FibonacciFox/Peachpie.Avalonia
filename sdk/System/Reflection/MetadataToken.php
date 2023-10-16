<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MetadataTokenMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function op_Implicit_1($token){}
	/**
	 * @return \System\Reflection\MetadataToken
	 */
	#[MethodOverride] public static function op_Implicit_2($token){}
}
/**
 */
class MetadataToken extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Value;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGlobalTypeDefToken;
	/**
	 * @var \System\Reflection\MetadataTokenType
	 * @property
	 */
	public readonly $TokenType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeDef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFieldDef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMethodDef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMemberRef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEvent;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsProperty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsParamDef;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsTypeSpec;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMethodSpec;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsString;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSignature;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGenericPar;
	/**
	 * @uses MetadataTokenMethodsOverride::op_Implicit_1 ($token)
	 * @uses MetadataTokenMethodsOverride::op_Implicit_2 ($token)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Boolean
	 */
	public static function IsNullToken($token){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGlobalTypeDefToken(){}
	/**
	 * @return \System\Reflection\MetadataTokenType
	 */
	public  function get_TokenType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTypeRef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTypeDef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFieldDef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMethodDef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMemberRef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEvent(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsProperty(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsParamDef(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTypeSpec(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMethodSpec(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsString(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSignature(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGenericPar(){}
}

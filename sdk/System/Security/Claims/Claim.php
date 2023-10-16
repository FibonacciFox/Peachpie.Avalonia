<?php
namespace System\Security\Claims;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ClaimMethodsOverride
{
	/**
	 * @return \System\Security\Claims\Claim
	 */
	#[MethodOverride] public  function Clone_1(){}
	/**
	 * @return \System\Security\Claims\Claim
	 */
	#[MethodOverride] public  function Clone_2($identity){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function WriteTo_1($writer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteTo_2($writer, $userData){}
}
/**
 */
class Claim extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Issuer;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $OriginalIssuer;
	/**
	 * @var \System\Collections\Generic\IDictionary_2[System\String,System\String]
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @var \System\Security\Claims\ClaimsIdentity
	 * @property
	 */
	public readonly $Subject;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ValueType;
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_CustomSerializationData(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Issuer(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_OriginalIssuer(){}
	/**
	 * @return \System\Collections\Generic\IDictionary_2
	 */
	public  function get_Properties(){}
	/**
	 * @return \System\Security\Claims\ClaimsIdentity
	 */
	public  function get_Subject(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Type(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Value(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ValueType(){}
	/**
	 * @uses ClaimMethodsOverride::Clone_1 ()
	 * @uses ClaimMethodsOverride::Clone_2 ($identity)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clone(mixed ...$args){}
	/**
	 * @uses ClaimMethodsOverride::WriteTo_1 ($writer)
	 * @uses ClaimMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

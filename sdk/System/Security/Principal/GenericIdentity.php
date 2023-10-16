<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericIdentityMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function FindAll_1($match){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function FindAll_2($type){}
	/**
	 * @return \System\Security\Claims\Claim
	 */
	#[MethodOverride] public  function FindFirst_1($match){}
	/**
	 * @return \System\Security\Claims\Claim
	 */
	#[MethodOverride] public  function FindFirst_2($type){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function HasClaim_1($match){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function HasClaim_2($type, $value){}
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
class GenericIdentity extends \System\Security\Claims\ClaimsIdentity implements 
	\System\Security\Principal\IIdentity
{
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\Claim]
	 * @property
	 */
	public readonly $Claims;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AuthenticationType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAuthenticated;
	/**
	 * @var \System\Security\Claims\ClaimsIdentity
	 * @property
	 */
	public $Actor;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $BootstrapContext;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Label;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $NameClaimType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $RoleClaimType;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddNameClaim(){}
	/**
	 * @uses GenericIdentityMethodsOverride::FindAll_1 ($match)
	 * @uses GenericIdentityMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses GenericIdentityMethodsOverride::FindFirst_1 ($match)
	 * @uses GenericIdentityMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses GenericIdentityMethodsOverride::HasClaim_1 ($match)
	 * @uses GenericIdentityMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @uses GenericIdentityMethodsOverride::WriteTo_1 ($writer)
	 * @uses GenericIdentityMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
}

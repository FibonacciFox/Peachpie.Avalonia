<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericPrincipalMethodsOverride
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
class GenericPrincipal extends \System\Security\Claims\ClaimsPrincipal implements 
	\System\Security\Principal\IPrincipal
{
	/**
	 * @var \System\Security\Principal\IIdentity
	 * @property
	 */
	public readonly $Identity;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\Claim]
	 * @property
	 */
	public readonly $Claims;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\ClaimsIdentity]
	 * @property
	 */
	public readonly $Identities;
	/**
	 * @param \System\Security\Principal\IIdentity $identity
	 * @param \System\String[] $roles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddIdentityWithRoles($identity, $roles){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultInstance(){}
	/**
	 * @uses GenericPrincipalMethodsOverride::FindAll_1 ($match)
	 * @uses GenericPrincipalMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses GenericPrincipalMethodsOverride::FindFirst_1 ($match)
	 * @uses GenericPrincipalMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses GenericPrincipalMethodsOverride::HasClaim_1 ($match)
	 * @uses GenericPrincipalMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @uses GenericPrincipalMethodsOverride::WriteTo_1 ($writer)
	 * @uses GenericPrincipalMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
}

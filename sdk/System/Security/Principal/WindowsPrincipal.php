<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowsPrincipalMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsInRole_1($role){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsInRole_2($role){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsInRole_3($rid){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsInRole_4($sid){}
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
class WindowsPrincipal extends \System\Security\Claims\ClaimsPrincipal implements 
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
	public readonly $UserClaims;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\Claim]
	 * @property
	 */
	public readonly $DeviceClaims;
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
	 * @uses WindowsPrincipalMethodsOverride::IsInRole_1 ($role)
	 * @uses WindowsPrincipalMethodsOverride::IsInRole_2 ($role)
	 * @uses WindowsPrincipalMethodsOverride::IsInRole_3 ($rid)
	 * @uses WindowsPrincipalMethodsOverride::IsInRole_4 ($sid)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsInRole(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_UserClaims(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_DeviceClaims(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultInstance(){}
	/**
	 * @uses WindowsPrincipalMethodsOverride::FindAll_1 ($match)
	 * @uses WindowsPrincipalMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses WindowsPrincipalMethodsOverride::FindFirst_1 ($match)
	 * @uses WindowsPrincipalMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses WindowsPrincipalMethodsOverride::HasClaim_1 ($match)
	 * @uses WindowsPrincipalMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @uses WindowsPrincipalMethodsOverride::WriteTo_1 ($writer)
	 * @uses WindowsPrincipalMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
}

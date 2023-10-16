<?php
namespace System\Security\Claims;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ClaimsPrincipalMethodsOverride
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
class ClaimsPrincipal extends \System\Object implements 
	\System\Security\Principal\IPrincipal
{
	/**
	 * @var \System\Func_2[System\Collections\Generic\IEnumerable_1[System\Security\Claims\ClaimsIdentity],System\Security\Claims\ClaimsIdentity]
	 * @property
	 */
	public $PrimaryIdentitySelector;
	/**
	 * @var \System\Func_1[System\Security\Claims\ClaimsPrincipal]
	 * @property
	 */
	public $ClaimsPrincipalSelector;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\Claim]
	 * @property
	 */
	public readonly $Claims;
	/**
	 * @var \System\Security\Claims\ClaimsPrincipal
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\ClaimsIdentity]
	 * @property
	 */
	public readonly $Identities;
	/**
	 * @var \System\Security\Principal\IIdentity
	 * @property
	 */
	public readonly $Identity;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectClaimsPrincipal(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $identities
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SelectPrimaryIdentity($identities){}
	/**
	 * @return \System\Func_2
	 */
	public static function get_PrimaryIdentitySelector(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public static function set_PrimaryIdentitySelector($value){}
	/**
	 * @return \System\Func_1
	 */
	public static function get_ClaimsPrincipalSelector(){}
	/**
	 * @param \System\Func_1 $value
	 * @return \System\Void|void
	 */
	public static function set_ClaimsPrincipalSelector($value){}
	/**
	 * @param \System\Security\Claims\ClaimsIdentity $identity
	 * @return \System\Void|void
	 */
	public  function AddIdentity($identity){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $identities
	 * @return \System\Void|void
	 */
	public  function AddIdentities($identities){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Claims(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_CustomSerializationData(){}
	/**
	 * @return \System\Security\Claims\ClaimsPrincipal
	 */
	public  function Clone(){}
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @return \System\Security\Claims\ClaimsIdentity
	 */
	protected  function CreateClaimsIdentity($reader){}
	/**
	 * @return \System\Security\Claims\ClaimsPrincipal
	 */
	public static function get_Current(){}
	/**
	 * @uses ClaimsPrincipalMethodsOverride::FindAll_1 ($match)
	 * @uses ClaimsPrincipalMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses ClaimsPrincipalMethodsOverride::FindFirst_1 ($match)
	 * @uses ClaimsPrincipalMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses ClaimsPrincipalMethodsOverride::HasClaim_1 ($match)
	 * @uses ClaimsPrincipalMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Identities(){}
	/**
	 * @return \System\Security\Principal\IIdentity
	 */
	public  function get_Identity(){}
	/**
	 * @param \System\String|string $role
	 * @return \System\Boolean
	 */
	public  function IsInRole($role){}
	/**
	 * @uses ClaimsPrincipalMethodsOverride::WriteTo_1 ($writer)
	 * @uses ClaimsPrincipalMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSerializingMethod($context){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	protected  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

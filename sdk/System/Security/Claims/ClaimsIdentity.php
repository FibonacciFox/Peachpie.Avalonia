<?php
namespace System\Security\Claims;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ClaimsIdentityMethodsOverride
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
class ClaimsIdentity extends \System\Object implements 
	\System\Security\Principal\IIdentity
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultIssuer;
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultNameClaimType;
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultRoleClaimType;
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
	 * @var \System\Collections\Generic\IEnumerable_1[System\Security\Claims\Claim]
	 * @property
	 */
	public readonly $Claims;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Label;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
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
	 * @return \System\String|string
	 */
	public  function get_AuthenticationType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAuthenticated(){}
	/**
	 * @return \System\Security\Claims\ClaimsIdentity
	 */
	public  function get_Actor(){}
	/**
	 * @param \System\Security\Claims\ClaimsIdentity $value
	 * @return \System\Void|void
	 */
	public  function set_Actor($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_BootstrapContext(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_BootstrapContext($value){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Claims(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CombinedClaimsIterator(){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_CustomSerializationData(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function get_ExternalClaims(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Label(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Label($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NameClaimType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RoleClaimType(){}
	/**
	 * @return \System\Security\Claims\ClaimsIdentity
	 */
	public  function Clone(){}
	/**
	 * @param \System\Security\Claims\Claim $claim
	 * @return \System\Void|void
	 */
	public  function AddClaim($claim){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $claims
	 * @return \System\Void|void
	 */
	public  function AddClaims($claims){}
	/**
	 * @param \System\Security\Claims\Claim $claim
	 * @return \System\Boolean
	 */
	public  function TryRemoveClaim($claim){}
	/**
	 * @param \System\Security\Claims\Claim $claim
	 * @return \System\Void|void
	 */
	public  function RemoveClaim($claim){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $claims
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SafeAddClaims($claims){}
	/**
	 * @param \System\Security\Claims\Claim $claim
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SafeAddClaim($claim){}
	/**
	 * @uses ClaimsIdentityMethodsOverride::FindAll_1 ($match)
	 * @uses ClaimsIdentityMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses ClaimsIdentityMethodsOverride::FindFirst_1 ($match)
	 * @uses ClaimsIdentityMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses ClaimsIdentityMethodsOverride::HasClaim_1 ($match)
	 * @uses ClaimsIdentityMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($reader){}
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @return \System\Security\Claims\Claim
	 */
	protected  function CreateClaim($reader){}
	/**
	 * @uses ClaimsIdentityMethodsOverride::WriteTo_1 ($writer)
	 * @uses ClaimsIdentityMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
	/**
	 * @param \System\Security\Claims\ClaimsIdentity $subject
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsCircular($subject){}
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

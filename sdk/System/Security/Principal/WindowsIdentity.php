<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowsIdentityMethodsOverride
{
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle
	 */
	#[MethodOverride] private static function DuplicateAccessToken_1($accessToken){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle
	 */
	#[MethodOverride] private static function DuplicateAccessToken_2($accessToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetObjectData_1($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetObjectData_2($info, $context){}
	/**
	 * @return \System\Security\Principal\WindowsIdentity
	 */
	#[MethodOverride] public static function GetCurrent_1(){}
	/**
	 * @return \System\Security\Principal\WindowsIdentity
	 */
	#[MethodOverride] public static function GetCurrent_2($ifImpersonating){}
	/**
	 * @return \System\Security\Principal\WindowsIdentity
	 */
	#[MethodOverride] public static function GetCurrent_3($desiredAccess){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function RunImpersonated_1($safeAccessTokenHandle, $action){}
	/**
	 * @return \System\Security\Principal\T
	 */
	#[MethodOverride] public static function RunImpersonated_2($safeAccessTokenHandle, $func){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public static function RunImpersonatedAsync_1($safeAccessTokenHandle, $func){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] public static function RunImpersonatedAsync_2($safeAccessTokenHandle, $func){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
	/**
	 * @return \System\Security\Principal\T
	 */
	#[MethodOverride] private  function GetTokenInformation_1($tokenInformationClass){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeLocalAllocHandle
	 */
	#[MethodOverride] private static function GetTokenInformation_2($tokenHandle, $tokenInformationClass, $nullOnInvalidParam){}
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
class WindowsIdentity extends \System\Security\Claims\ClaimsIdentity implements 
	\System\Security\Principal\IIdentity,
	\System\IDisposable,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultIssuer;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $AuthenticationType;
	/**
	 * @var \System\Security\Principal\TokenImpersonationLevel
	 * @property
	 */
	public readonly $ImpersonationLevel;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAuthenticated;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsGuest;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSystem;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAnonymous;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public readonly $User;
	/**
	 * @var \System\Security\Principal\IdentityReferenceCollection
	 * @property
	 */
	public readonly $Groups;
	/**
	 * @var \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle
	 * @property
	 */
	public readonly $AccessToken;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Token;
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
	#[MethodPrivate] static function ConnectToLsa(){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeLsaHandle $lsaHandle
	 * @param \System\String|string $packageName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LookupAuthenticationPackage($lsaHandle, $packageName){}
	/**
	 * @uses WindowsIdentityMethodsOverride::DuplicateAccessToken_1 ($accessToken)
	 * @uses WindowsIdentityMethodsOverride::DuplicateAccessToken_2 ($accessToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DuplicateAccessToken(mixed ...$args){}
	/**
	 * @param \System\IntPtr $userToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFromToken($userToken){}
	/**
	 * @uses WindowsIdentityMethodsOverride::GetObjectData_1 ($info, $context)
	 * @uses WindowsIdentityMethodsOverride::GetObjectData_2 ($info, $context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObjectData(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @uses WindowsIdentityMethodsOverride::GetCurrent_1 ()
	 * @uses WindowsIdentityMethodsOverride::GetCurrent_2 ($ifImpersonating)
	 * @uses WindowsIdentityMethodsOverride::GetCurrent_3 ($desiredAccess)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCurrent(mixed ...$args){}
	/**
	 * @return \System\Security\Principal\WindowsIdentity
	 */
	public static function GetAnonymous(){}
	/**
	 * @return \System\Security\Principal\TokenImpersonationLevel
	 */
	public  function get_ImpersonationLevel(){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckNtTokenForSid($sid){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGuest(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSystem(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAnonymous(){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetName(){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_Owner(){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_User(){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	public  function get_Groups(){}
	/**
	 * @return \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle
	 */
	public  function get_AccessToken(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Token(){}
	/**
	 * @uses WindowsIdentityMethodsOverride::RunImpersonated_1 ($safeAccessTokenHandle, $action)
	 * @uses WindowsIdentityMethodsOverride::RunImpersonated_2 ($safeAccessTokenHandle, $func)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RunImpersonated(mixed ...$args){}
	/**
	 * @uses WindowsIdentityMethodsOverride::RunImpersonatedAsync_1 ($safeAccessTokenHandle, $func)
	 * @uses WindowsIdentityMethodsOverride::RunImpersonatedAsync_2 ($safeAccessTokenHandle, $func)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RunImpersonatedAsync(mixed ...$args){}
	/**
	 * @uses WindowsIdentityMethodsOverride::Dispose_1 ($disposing)
	 * @uses WindowsIdentityMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle $token
	 * @param \System\Action $action
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunImpersonatedInternal($token, $action){}
	/**
	 * @param \System\Threading\AsyncLocalValueChangedArgs_1 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CurrentImpersonatedTokenChanged($args){}
	/**
	 * @param \System\Security\Principal\TokenAccessLevels $desiredAccess
	 * @param \System\Boolean $threadOnly
	 * @return \System\Security\Principal\WindowsIdentity
	 */
	protected static function GetCurrentInternal($desiredAccess, $threadOnly){}
	/**
	 * @param \System\Int32|int $dwLastError
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHRForWin32Error($dwLastError){}
	/**
	 * @param \System\Int32|int $status
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetExceptionFromNtStatus($status){}
	/**
	 * @param \System\Security\Principal\TokenAccessLevels $desiredAccess
	 * @param \System\Boolean $threadOnly
	 * @param \System\Boolean& $isImpersonating
	 * @param \System\Int32& $hr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentToken($desiredAccess, $threadOnly, $isImpersonating, $hr){}
	/**
	 * @param \System\Security\Principal\TokenAccessLevels $desiredAccess
	 * @param \System\Int32& $hr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentProcessToken($desiredAccess, $hr){}
	/**
	 * @uses WindowsIdentityMethodsOverride::GetTokenInformation_1 ($tokenInformationClass)
	 * @uses WindowsIdentityMethodsOverride::GetTokenInformation_2 ($tokenHandle, $tokenInformationClass, $nullOnInvalidParam)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTokenInformation(mixed ...$args){}
	/**
	 * @param \Microsoft\Win32\SafeHandles\SafeAccessTokenHandle $safeTokenHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLogonAuthId($safeTokenHandle){}
	/**
	 * @param \System\Security\Principal\WindowsIdentity $identity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAuthType($identity){}
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
	#[MethodPrivate]  function InitializeClaims(){}
	/**
	 * @param \System\Collections\Generic\List_1 $instanceClaims
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddGroupSidClaims($instanceClaims){}
	/**
	 * @param \System\Collections\Generic\List_1 $instanceClaims
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddPrimarySidClaim($instanceClaims){}
	/**
	 * @param \System\Collections\Generic\List_1 $instanceClaims
	 * @param \System\Security\Principal\TokenInformationClass $tokenInformationClass
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddDeviceGroupSidClaims($instanceClaims, $tokenInformationClass){}
	/**
	 * @param \System\Collections\Generic\List_1 $instanceClaims
	 * @param \System\Security\Principal\TokenInformationClass $tokenInformationClass
	 * @param \System\String|string $propertyValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddTokenClaims($instanceClaims, $tokenInformationClass, $propertyValue){}
	/**
	 * @uses WindowsIdentityMethodsOverride::FindAll_1 ($match)
	 * @uses WindowsIdentityMethodsOverride::FindAll_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindAll(mixed ...$args){}
	/**
	 * @uses WindowsIdentityMethodsOverride::FindFirst_1 ($match)
	 * @uses WindowsIdentityMethodsOverride::FindFirst_2 ($type)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindFirst(mixed ...$args){}
	/**
	 * @uses WindowsIdentityMethodsOverride::HasClaim_1 ($match)
	 * @uses WindowsIdentityMethodsOverride::HasClaim_2 ($type, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HasClaim(mixed ...$args){}
	/**
	 * @uses WindowsIdentityMethodsOverride::WriteTo_1 ($writer)
	 * @uses WindowsIdentityMethodsOverride::WriteTo_2 ($writer, $userData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteTo(mixed ...$args){}
}

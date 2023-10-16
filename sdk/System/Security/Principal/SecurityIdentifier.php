<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SecurityIdentifierMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($sid){}
	/**
	 * @return \System\Security\Principal\IdentityReference
	 */
	#[MethodOverride] public  function Translate_1($targetType){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] protected static function Translate_2($sourceSids, $targetType, $forceSuccess){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] protected static function Translate_3($sourceSids, $targetType, $someFailed){}
}
/**
 */
class SecurityIdentifier extends \System\Security\Principal\IdentityReference implements 
	\System\IComparable_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $MinBinaryLength;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $MaxBinaryLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public readonly $AccountDomainSid;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @param \System\Security\Principal\IdentifierAuthority $identifierAuthority
	 * @param \System\ReadOnlySpan_1 $subAuthorities
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFromParts($identifierAuthority, $subAuthorities){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFromBinaryForm($binaryForm, $offset){}
	/**
	 * @return \System\Byte[]
	 */
	protected  function get_BinaryForm(){}
	/**
	 * @return \System\Security\Principal\IdentifierAuthority
	 */
	protected  function get_IdentifierAuthority(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_SubAuthorityCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BinaryLength(){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_AccountDomainSid(){}
	/**
	 * @uses SecurityIdentifierMethodsOverride::Equals_1 ($o)
	 * @uses SecurityIdentifierMethodsOverride::Equals_2 ($sid)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Type $targetType
	 * @return \System\Boolean
	 */
	protected static function IsValidTargetTypeStatic($targetType){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	protected  function GetAccountDomainSid(){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsAccountSid(){}
	/**
	 * @uses SecurityIdentifierMethodsOverride::Translate_1 ($targetType)
	 * @uses SecurityIdentifierMethodsOverride::Translate_2 ($sourceSids, $targetType, $forceSuccess)
	 * @uses SecurityIdentifierMethodsOverride::Translate_3 ($sourceSids, $targetType, $someFailed)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Translate(mixed ...$args){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $left
	 * @param \System\Security\Principal\SecurityIdentifier $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $left
	 * @param \System\Security\Principal\SecurityIdentifier $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @return \System\Int32|int
	 */
	public  function CompareTo($sid){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	protected  function GetSubAuthority($index){}
	/**
	 * @param \System\Security\Principal\WellKnownSidType $type
	 * @return \System\Boolean
	 */
	public  function IsWellKnown($type){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	public  function GetBinaryForm($binaryForm, $offset){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @return \System\Boolean
	 */
	public  function IsEqualDomainSid($sid){}
	/**
	 * @param \System\Security\Principal\IdentityReferenceCollection $sourceSids
	 * @param \System\Boolean& $someFailed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TranslateToNTAccounts($sourceSids, $someFailed){}
}

<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CommonAclMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Security\AccessControl\AceEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
}
/**
 */
class CommonAcl extends \System\Security\AccessControl\GenericAcl implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Revision;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCanonical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsContainer;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDS;
	/**
	 * @var \System\Security\AccessControl\GenericAce
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAFtoPMConversionMatrix(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreatePMtoAFConversionMatrix(){}
	/**
	 * @param \System\Security\AccessControl\AceFlags $aceFlags
	 * @param \System\Boolean $isDS
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AFFromAceFlags($aceFlags, $isDS){}
	/**
	 * @param \System\Security\AccessControl\AF $af
	 * @param \System\Boolean $isDS
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AceFlagsFromAF($af, $isDS){}
	/**
	 * @param \System\Security\AccessControl\AceFlags $left
	 * @param \System\Security\AccessControl\AceFlags $right
	 * @param \System\Boolean $isDS
	 * @param \System\Security\AccessControl\AceFlags& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MergeInheritanceBits($left, $right, $isDS, $result){}
	/**
	 * @param \System\Security\AccessControl\AceFlags $existing
	 * @param \System\Security\AccessControl\AceFlags $remove
	 * @param \System\Boolean $isDS
	 * @param \System\Security\AccessControl\AceFlags& $result
	 * @param \System\Boolean& $total
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveInheritanceBits($existing, $remove, $isDS, $result, $total){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanonicalizeIfNecessary(){}
	/**
	 * @param \System\Security\AccessControl\GenericAce $ace
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DaclAcePriority($ace){}
	/**
	 * @param \System\Security\AccessControl\GenericAce $ace
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SaclAcePriority($ace){}
	/**
	 * @param \System\Security\AccessControl\GenericAce $ace1
	 * @param \System\Security\AccessControl\GenericAce $ace2
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CompareAces($ace1, $ace2, $isDacl){}
	/**
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QuickSort($left, $right, $isDacl){}
	/**
	 * @param \System\Security\AccessControl\GenericAce& $ace
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InspectAce($ace, $isDacl){}
	/**
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveMeaninglessAcesAndFlags($isDacl){}
	/**
	 * @param \System\Boolean $compact
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Canonicalize($compact, $isDacl){}
	/**
	 * @param \System\Security\AccessControl\ObjectAce $originalAce
	 * @param \System\Int32|int $accessMask
	 * @param \System\Security\AccessControl\AceFlags $aceFlags
	 * @param \System\Security\AccessControl\ObjectAceFlags& $objectFlags
	 * @param \System\Guid& $objectType
	 * @param \System\Guid& $inheritedObjectType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetObjectTypesForSplit($originalAce, $accessMask, $aceFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ObjectTypesMatch($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InheritedObjectTypesMatch($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AccessMasksAreMergeable($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AceFlagsAreMergeable($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $objectType
	 * @param \System\Int32& $accessMask
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAccessMaskForRemoval($ace, $objectFlags, $objectType, $accessMask){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $inheritedObjectType
	 * @param \System\Security\AccessControl\AceFlags& $aceFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInheritanceFlagsForRemoval($ace, $objectFlags, $inheritedObjectType, $aceFlags){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AceOpaquesMatch($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AcesAreMergeable($ace, $newAce){}
	/**
	 * @param \System\Security\AccessControl\QualifiedAce& $ace
	 * @param \System\Security\AccessControl\QualifiedAce $newAce
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MergeAces($ace, $newAce){}
	/**
	 * @param \System\Boolean $isDacl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanonicalCheck($isDacl){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowIfNotCanonical(){}
	/**
	 * @return \System\Security\AccessControl\RawAcl
	 */
	protected  function get_RawAcl(){}
	/**
	 * @param \System\Security\AccessControl\AccessControlType $accessType
	 * @return \System\Void|void
	 */
	protected static function CheckAccessType($accessType){}
	/**
	 * @param \System\Security\AccessControl\InheritanceFlags $inheritanceFlags
	 * @param \System\Security\AccessControl\PropagationFlags $propagationFlags
	 * @return \System\Void|void
	 */
	protected  function CheckFlags($inheritanceFlags, $propagationFlags){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @param \System\Security\AccessControl\AceQualifier $qualifier
	 * @param \System\Int32|int $accessMask
	 * @param \System\Security\AccessControl\AceFlags $flags
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $objectType
	 * @param \System\Guid $inheritedObjectType
	 * @return \System\Void|void
	 */
	protected  function AddQualifiedAce($sid, $qualifier, $accessMask, $flags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @param \System\Security\AccessControl\AceQualifier $qualifier
	 * @param \System\Int32|int $accessMask
	 * @param \System\Security\AccessControl\AceFlags $flags
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $objectType
	 * @param \System\Guid $inheritedObjectType
	 * @return \System\Void|void
	 */
	protected  function SetQualifiedAce($sid, $qualifier, $accessMask, $flags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @param \System\Security\AccessControl\AceQualifier $qualifier
	 * @param \System\Int32|int $accessMask
	 * @param \System\Security\AccessControl\AceFlags $flags
	 * @param \System\Boolean $saclSemantics
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $objectType
	 * @param \System\Guid $inheritedObjectType
	 * @return \System\Boolean
	 */
	protected  function RemoveQualifiedAces($sid, $qualifier, $accessMask, $flags, $saclSemantics, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @param \System\Security\AccessControl\AceQualifier $qualifier
	 * @param \System\Int32|int $accessMask
	 * @param \System\Security\AccessControl\AceFlags $flags
	 * @param \System\Security\AccessControl\ObjectAceFlags $objectFlags
	 * @param \System\Guid $objectType
	 * @param \System\Guid $inheritedObjectType
	 * @return \System\Void|void
	 */
	protected  function RemoveQualifiedAcesSpecific($sid, $qualifier, $accessMask, $flags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnAclModificationTried(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCanonical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsContainer(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDS(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveInheritedAces(){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @return \System\Void|void
	 */
	public  function Purge($sid){}
	/**
	 * @uses CommonAclMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses CommonAclMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses CommonAclMethodsOverride::GetEnumerator_1 ()
	 * @uses CommonAclMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}

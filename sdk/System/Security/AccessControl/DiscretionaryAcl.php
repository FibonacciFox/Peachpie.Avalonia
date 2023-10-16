<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DiscretionaryAclMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAccess_1($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAccess_2($accessType, $sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAccess_3($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAccess_1($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAccess_2($accessType, $sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAccess_3($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAccess_1($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAccess_2($accessType, $sid, $rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAccess_3($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAccessSpecific_1($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAccessSpecific_2($accessType, $sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAccessSpecific_3($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
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
class DiscretionaryAcl extends \System\Security\AccessControl\CommonAcl implements 
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
	 * @uses DiscretionaryAclMethodsOverride::AddAccess_1 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses DiscretionaryAclMethodsOverride::AddAccess_2 ($accessType, $sid, $rule)
	 * @uses DiscretionaryAclMethodsOverride::AddAccess_3 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAccess(mixed ...$args){}
	/**
	 * @uses DiscretionaryAclMethodsOverride::SetAccess_1 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses DiscretionaryAclMethodsOverride::SetAccess_2 ($accessType, $sid, $rule)
	 * @uses DiscretionaryAclMethodsOverride::SetAccess_3 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAccess(mixed ...$args){}
	/**
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccess_1 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccess_2 ($accessType, $sid, $rule)
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccess_3 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccess(mixed ...$args){}
	/**
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccessSpecific_1 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccessSpecific_2 ($accessType, $sid, $rule)
	 * @uses DiscretionaryAclMethodsOverride::RemoveAccessSpecific_3 ($accessType, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAccessSpecific(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_EveryOneFullAccessForNullDacl(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_EveryOneFullAccessForNullDacl($value){}
	/**
	 * @param \System\Boolean $isDS
	 * @param \System\Boolean $isContainer
	 * @return \System\Security\AccessControl\DiscretionaryAcl
	 */
	protected static function CreateAllowEveryoneFullAccess($isDS, $isContainer){}
	/**
	 * @uses DiscretionaryAclMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses DiscretionaryAclMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses DiscretionaryAclMethodsOverride::GetEnumerator_1 ()
	 * @uses DiscretionaryAclMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}

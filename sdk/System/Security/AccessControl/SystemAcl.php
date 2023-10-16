<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SystemAclMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAudit_1($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAudit_2($sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAudit_3($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAudit_1($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAudit_2($sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetAudit_3($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAudit_1($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAudit_2($sid, $rule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function RemoveAudit_3($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAuditSpecific_1($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAuditSpecific_2($sid, $rule){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAuditSpecific_3($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType){}
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
class SystemAcl extends \System\Security\AccessControl\CommonAcl implements 
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
	 * @uses SystemAclMethodsOverride::AddAudit_1 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses SystemAclMethodsOverride::AddAudit_2 ($sid, $rule)
	 * @uses SystemAclMethodsOverride::AddAudit_3 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAudit(mixed ...$args){}
	/**
	 * @uses SystemAclMethodsOverride::SetAudit_1 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses SystemAclMethodsOverride::SetAudit_2 ($sid, $rule)
	 * @uses SystemAclMethodsOverride::SetAudit_3 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAudit(mixed ...$args){}
	/**
	 * @uses SystemAclMethodsOverride::RemoveAudit_1 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses SystemAclMethodsOverride::RemoveAudit_2 ($sid, $rule)
	 * @uses SystemAclMethodsOverride::RemoveAudit_3 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAudit(mixed ...$args){}
	/**
	 * @uses SystemAclMethodsOverride::RemoveAuditSpecific_1 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags)
	 * @uses SystemAclMethodsOverride::RemoveAuditSpecific_2 ($sid, $rule)
	 * @uses SystemAclMethodsOverride::RemoveAuditSpecific_3 ($auditFlags, $sid, $accessMask, $inheritanceFlags, $propagationFlags, $objectFlags, $objectType, $inheritedObjectType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAuditSpecific(mixed ...$args){}
	/**
	 * @uses SystemAclMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses SystemAclMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses SystemAclMethodsOverride::GetEnumerator_1 ()
	 * @uses SystemAclMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}

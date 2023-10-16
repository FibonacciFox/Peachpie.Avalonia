<?php
namespace System\Security\AccessControl;
/**
 */
class CommonSecurityDescriptor extends \System\Security\AccessControl\GenericSecurityDescriptor
{
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
	 * @var \System\Security\AccessControl\ControlFlags
	 * @property
	 */
	public readonly $ControlFlags;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public $Owner;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public $Group;
	/**
	 * @var \System\Security\AccessControl\SystemAcl
	 * @property
	 */
	public $SystemAcl;
	/**
	 * @var \System\Security\AccessControl\DiscretionaryAcl
	 * @property
	 */
	public $DiscretionaryAcl;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSystemAclCanonical;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDiscretionaryAclCanonical;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @param \System\Boolean $isContainer
	 * @param \System\Boolean $isDS
	 * @param \System\Security\AccessControl\ControlFlags $flags
	 * @param \System\Security\Principal\SecurityIdentifier $owner
	 * @param \System\Security\Principal\SecurityIdentifier $group
	 * @param \System\Security\AccessControl\SystemAcl $systemAcl
	 * @param \System\Security\AccessControl\DiscretionaryAcl $discretionaryAcl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFromParts($isContainer, $isDS, $flags, $owner, $group, $systemAcl, $discretionaryAcl){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsContainer(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDS(){}
	/**
	 * @return \System\Security\AccessControl\SystemAcl
	 */
	public  function get_SystemAcl(){}
	/**
	 * @param \System\Security\AccessControl\SystemAcl $value
	 * @return \System\Void|void
	 */
	public  function set_SystemAcl($value){}
	/**
	 * @return \System\Security\AccessControl\DiscretionaryAcl
	 */
	public  function get_DiscretionaryAcl(){}
	/**
	 * @param \System\Security\AccessControl\DiscretionaryAcl $value
	 * @return \System\Void|void
	 */
	public  function set_DiscretionaryAcl($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSystemAclCanonical(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDiscretionaryAclCanonical(){}
	/**
	 * @param \System\Boolean $isProtected
	 * @param \System\Boolean $preserveInheritance
	 * @return \System\Void|void
	 */
	public  function SetSystemAclProtection($isProtected, $preserveInheritance){}
	/**
	 * @param \System\Boolean $isProtected
	 * @param \System\Boolean $preserveInheritance
	 * @return \System\Void|void
	 */
	public  function SetDiscretionaryAclProtection($isProtected, $preserveInheritance){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @return \System\Void|void
	 */
	public  function PurgeAccessControl($sid){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $sid
	 * @return \System\Void|void
	 */
	public  function PurgeAudit($sid){}
	/**
	 * @param \System\Byte $revision
	 * @param \System\Int32|int $trusted
	 * @return \System\Void|void
	 */
	public  function AddDiscretionaryAcl($revision, $trusted){}
	/**
	 * @param \System\Byte $revision
	 * @param \System\Int32|int $trusted
	 * @return \System\Void|void
	 */
	public  function AddSystemAcl($revision, $trusted){}
	/**
	 * @param \System\Security\AccessControl\ControlFlags $flagsToUpdate
	 * @param \System\Security\AccessControl\ControlFlags $newFlags
	 * @return \System\Void|void
	 */
	protected  function UpdateControlFlags($flagsToUpdate, $newFlags){}
	/**
	 * @param \System\Security\AccessControl\ControlFlags $flags
	 * @return \System\Void|void
	 */
	protected  function AddControlFlags($flags){}
	/**
	 * @param \System\Security\AccessControl\ControlFlags $flags
	 * @return \System\Void|void
	 */
	protected  function RemoveControlFlags($flags){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsSystemAclPresent(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsDiscretionaryAclPresent(){}
}

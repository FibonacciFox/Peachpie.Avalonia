<?php
namespace System\Security\AccessControl;
/**
 */
class KnownAce extends \System\Security\AccessControl\GenericAce
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_indexInAcl;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $AccessMask;
	/**
	 * @var \System\Security\Principal\SecurityIdentifier
	 * @property
	 */
	public $SecurityIdentifier;
	/**
	 * @var \System\Security\AccessControl\AceType
	 * @property
	 */
	public readonly $AceType;
	/**
	 * @var \System\Security\AccessControl\AceFlags
	 * @property
	 */
	public $AceFlags;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInherited;
	/**
	 * @var \System\Security\AccessControl\InheritanceFlags
	 * @property
	 */
	public readonly $InheritanceFlags;
	/**
	 * @var \System\Security\AccessControl\PropagationFlags
	 * @property
	 */
	public readonly $PropagationFlags;
	/**
	 * @var \System\Security\AccessControl\AuditFlags
	 * @property
	 */
	public readonly $AuditFlags;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AccessMask(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_AccessMask($value){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_SecurityIdentifier(){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $value
	 * @return \System\Void|void
	 */
	public  function set_SecurityIdentifier($value){}
}

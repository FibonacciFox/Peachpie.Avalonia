<?php
namespace System\Security\AccessControl;
/**
 */
class CompoundAce extends \System\Security\AccessControl\KnownAce
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_indexInAcl;
	/**
	 * @var \System\Security\AccessControl\CompoundAceType
	 * @property
	 */
	public $CompoundAceType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
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
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @param \System\Int32& $accessMask
	 * @param \System\Security\AccessControl\CompoundAceType& $compoundAceType
	 * @param \System\Security\Principal\SecurityIdentifier& $sid
	 * @return \System\Boolean
	 */
	protected static function ParseBinaryForm($binaryForm, $offset, $accessMask, $compoundAceType, $sid){}
	/**
	 * @return \System\Security\AccessControl\CompoundAceType
	 */
	public  function get_CompoundAceType(){}
	/**
	 * @param \System\Security\AccessControl\CompoundAceType $value
	 * @return \System\Void|void
	 */
	public  function set_CompoundAceType($value){}
}

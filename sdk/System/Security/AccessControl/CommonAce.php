<?php
namespace System\Security\AccessControl;
/**
 */
class CommonAce extends \System\Security\AccessControl\QualifiedAce
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
	public readonly $BinaryLength;
	/**
	 * @var \System\Security\AccessControl\AceQualifier
	 * @property
	 */
	public readonly $AceQualifier;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCallback;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OpaqueLength;
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
	 * @param \System\Boolean $isCallback
	 * @param \System\Security\AccessControl\AceQualifier $qualifier
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TypeFromQualifier($isCallback, $qualifier){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @param \System\Security\AccessControl\AceQualifier& $qualifier
	 * @param \System\Int32& $accessMask
	 * @param \System\Security\Principal\SecurityIdentifier& $sid
	 * @param \System\Boolean& $isCallback
	 * @param \System\Byte[]& $opaque
	 * @return \System\Boolean
	 */
	protected static function ParseBinaryForm($binaryForm, $offset, $qualifier, $accessMask, $sid, $isCallback, $opaque){}
	/**
	 * @param \System\Boolean $isCallback
	 * @return \System\Int32|int
	 */
	public static function MaxOpaqueLength($isCallback){}
}

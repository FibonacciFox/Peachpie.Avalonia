<?php
namespace System\Security\AccessControl;
/**
 */
class QualifiedAce extends \System\Security\AccessControl\KnownAce
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_indexInAcl;
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @param \System\Security\AccessControl\AceType $type
	 * @param \System\Boolean& $isCallback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QualifierFromType($type, $isCallback){}
	/**
	 * @return \System\Security\AccessControl\AceQualifier
	 */
	public  function get_AceQualifier(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCallback(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxOpaqueLengthInternal(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OpaqueLength(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetOpaque(){}
	/**
	 * @param \System\Byte[] $opaque
	 * @return \System\Void|void
	 */
	public  function SetOpaque($opaque){}
}

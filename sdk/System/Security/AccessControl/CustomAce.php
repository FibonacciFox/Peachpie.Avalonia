<?php
namespace System\Security\AccessControl;
/**
 */
class CustomAce extends \System\Security\AccessControl\GenericAce
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $MaxOpaqueLength;
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_indexInAcl;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OpaqueLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
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

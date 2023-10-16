<?php
namespace System\Security\AccessControl;
/**
 */
class GenericAce extends \System\Object
{
	/**
	 * @var \System\UInt16
	 * @field
	 */
	protected $_indexInAcl;
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
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	protected  function MarshalHeader($binaryForm, $offset){}
	/**
	 * @param \System\Security\AccessControl\AuditFlags $auditFlags
	 * @return \System\Security\AccessControl\AceFlags
	 */
	protected static function AceFlagsFromAuditFlags($auditFlags){}
	/**
	 * @param \System\Security\AccessControl\InheritanceFlags $inheritanceFlags
	 * @param \System\Security\AccessControl\PropagationFlags $propagationFlags
	 * @return \System\Security\AccessControl\AceFlags
	 */
	protected static function AceFlagsFromInheritanceFlags($inheritanceFlags, $propagationFlags){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	protected static function VerifyHeader($binaryForm, $offset){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Security\AccessControl\GenericAce
	 */
	public static function CreateFromBinaryForm($binaryForm, $offset){}
	/**
	 * @return \System\Security\AccessControl\AceType
	 */
	public  function get_AceType(){}
	/**
	 * @return \System\Security\AccessControl\AceFlags
	 */
	public  function get_AceFlags(){}
	/**
	 * @param \System\Security\AccessControl\AceFlags $value
	 * @return \System\Void|void
	 */
	public  function set_AceFlags($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInherited(){}
	/**
	 * @return \System\Security\AccessControl\InheritanceFlags
	 */
	public  function get_InheritanceFlags(){}
	/**
	 * @return \System\Security\AccessControl\PropagationFlags
	 */
	public  function get_PropagationFlags(){}
	/**
	 * @return \System\Security\AccessControl\AuditFlags
	 */
	public  function get_AuditFlags(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BinaryLength(){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	public  function GetBinaryForm($binaryForm, $offset){}
	/**
	 * @return \System\Security\AccessControl\GenericAce
	 */
	public  function Copy(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
	/**
	 * @param \System\Security\AccessControl\GenericAce $left
	 * @param \System\Security\AccessControl\GenericAce $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Security\AccessControl\GenericAce $left
	 * @param \System\Security\AccessControl\GenericAce $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}

<?php
namespace System\Security\AccessControl;
/**
 */
class GenericSecurityDescriptor extends \System\Object
{
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Revision;
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
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $number
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MarshalInt($binaryForm, $offset, $number){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Int32|int
	 */
	protected static function UnmarshalInt($binaryForm, $offset){}
	/**
	 * @return \System\Security\AccessControl\GenericAcl
	 */
	protected  function get_GenericSacl(){}
	/**
	 * @return \System\Security\AccessControl\GenericAcl
	 */
	protected  function get_GenericDacl(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsCraftedAefaDacl(){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsSddlConversionSupported(){}
	/**
	 * @return \System\Byte
	 */
	public static function get_Revision(){}
	/**
	 * @return \System\Security\AccessControl\ControlFlags
	 */
	public  function get_ControlFlags(){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_Owner(){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $value
	 * @return \System\Void|void
	 */
	public  function set_Owner($value){}
	/**
	 * @return \System\Security\Principal\SecurityIdentifier
	 */
	public  function get_Group(){}
	/**
	 * @param \System\Security\Principal\SecurityIdentifier $value
	 * @return \System\Void|void
	 */
	public  function set_Group($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BinaryLength(){}
	/**
	 * @param \System\Security\AccessControl\AccessControlSections $includeSections
	 * @return \System\String|string
	 */
	public  function GetSddlForm($includeSections){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	public  function GetBinaryForm($binaryForm, $offset){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

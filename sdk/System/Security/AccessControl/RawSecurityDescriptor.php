<?php
namespace System\Security\AccessControl;
/**
 */
class RawSecurityDescriptor extends \System\Security\AccessControl\GenericSecurityDescriptor
{
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
	 * @var \System\Security\AccessControl\RawAcl
	 * @property
	 */
	public $SystemAcl;
	/**
	 * @var \System\Security\AccessControl\RawAcl
	 * @property
	 */
	public $DiscretionaryAcl;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public $ResourceManagerControl;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @param \System\Security\AccessControl\ControlFlags $flags
	 * @param \System\Security\Principal\SecurityIdentifier $owner
	 * @param \System\Security\Principal\SecurityIdentifier $group
	 * @param \System\Security\AccessControl\RawAcl $systemAcl
	 * @param \System\Security\AccessControl\RawAcl $discretionaryAcl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFromParts($flags, $owner, $group, $systemAcl, $discretionaryAcl){}
	/**
	 * @param \System\String|string $sddlForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BinaryFormFromSddlForm($sddlForm){}
	/**
	 * @return \System\Security\AccessControl\RawAcl
	 */
	public  function get_SystemAcl(){}
	/**
	 * @param \System\Security\AccessControl\RawAcl $value
	 * @return \System\Void|void
	 */
	public  function set_SystemAcl($value){}
	/**
	 * @return \System\Security\AccessControl\RawAcl
	 */
	public  function get_DiscretionaryAcl(){}
	/**
	 * @param \System\Security\AccessControl\RawAcl $value
	 * @return \System\Void|void
	 */
	public  function set_DiscretionaryAcl($value){}
	/**
	 * @return \System\Byte
	 */
	public  function get_ResourceManagerControl(){}
	/**
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	public  function set_ResourceManagerControl($value){}
	/**
	 * @param \System\Security\AccessControl\ControlFlags $flags
	 * @return \System\Void|void
	 */
	public  function SetFlags($flags){}
}

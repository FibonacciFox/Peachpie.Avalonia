<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AccessRule_1 extends \System\Security\AccessControl\AccessRule
{
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Rights;
	/**
	 * @var \System\Security\AccessControl\AccessControlType
	 * @property
	 */
	public readonly $AccessControlType;
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public readonly $IdentityReference;
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
	 * @return \System\Security\AccessControl\T
	 */
	public  function get_Rights(){}
}

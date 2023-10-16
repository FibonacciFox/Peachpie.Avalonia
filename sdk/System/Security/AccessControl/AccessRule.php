<?php
namespace System\Security\AccessControl;
/**
 */
class AccessRule extends \System\Security\AccessControl\AuthorizationRule
{
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
	 * @return \System\Security\AccessControl\AccessControlType
	 */
	public  function get_AccessControlType(){}
}

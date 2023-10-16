<?php
namespace System\Security\AccessControl;
/**
 */
class AuthorizationRule extends \System\Object
{
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
	 * @return \System\Security\Principal\IdentityReference
	 */
	public  function get_IdentityReference(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_AccessMask(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

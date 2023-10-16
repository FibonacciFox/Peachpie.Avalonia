<?php
namespace System\Security;
/**
 */
class SecurityCriticalAttribute extends \System\Attribute
{
	/**
	 * @var \System\Security\SecurityCriticalScope
	 * @property
	 */
	public readonly $Scope;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Security\SecurityCriticalScope
	 */
	public  function get_Scope(){}
}

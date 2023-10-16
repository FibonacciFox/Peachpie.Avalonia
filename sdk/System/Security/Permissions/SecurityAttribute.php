<?php
namespace System\Security\Permissions;
/**
 */
class SecurityAttribute extends \System\Attribute
{
	/**
	 * @var \System\Security\Permissions\SecurityAction
	 * @property
	 */
	public $Action;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Unrestricted;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Security\Permissions\SecurityAction
	 */
	public  function get_Action(){}
	/**
	 * @param \System\Security\Permissions\SecurityAction $value
	 * @return \System\Void|void
	 */
	public  function set_Action($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Unrestricted(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Unrestricted($value){}
	/**
	 * @return \System\Security\IPermission
	 */
	public  function CreatePermission(){}
}

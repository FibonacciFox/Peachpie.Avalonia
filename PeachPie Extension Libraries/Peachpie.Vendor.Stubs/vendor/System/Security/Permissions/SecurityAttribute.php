<?php
namespace System\Security\Permissions;
class SecurityAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Security\Permissions\SecurityAction
	 */
	public $Action;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Unrestricted;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @return \System\Security\IPermission
	 */
	abstract public function CreatePermission();
}
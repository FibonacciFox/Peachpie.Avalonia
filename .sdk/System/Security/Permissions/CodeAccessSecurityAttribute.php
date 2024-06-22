<?php
namespace System\Security\Permissions;
class CodeAccessSecurityAttribute extends \System\Security\Permissions\SecurityAttribute
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

}
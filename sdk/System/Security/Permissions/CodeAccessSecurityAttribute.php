<?php
namespace System\Security\Permissions;
/**
 */
class CodeAccessSecurityAttribute extends \System\Security\Permissions\SecurityAttribute
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
}

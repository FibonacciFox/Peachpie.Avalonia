<?php
namespace System\Security\Principal;
/**
 */
interface IPrincipal
{
	/**
	 */
	public function get_Identity();
	/**
	 * @param \System\String|string $role
	 */
	public function IsInRole($role);
}

<?php
namespace System\Security\Principal;
interface IPrincipal
{


	/**
	 * @param \System\String|string $role
	 * @return \System\Boolean|bool
	 */
	public function IsInRole($role);
}
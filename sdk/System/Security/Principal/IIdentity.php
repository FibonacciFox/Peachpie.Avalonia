<?php
namespace System\Security\Principal;
/**
 */
interface IIdentity
{
	/**
	 */
	public function get_Name();
	/**
	 */
	public function get_AuthenticationType();
	/**
	 */
	public function get_IsAuthenticated();
}

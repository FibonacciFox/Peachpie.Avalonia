<?php
namespace System\Security;
interface IPermission
{


	/**
	 * @return \System\Security\IPermission
	 */
	public function Copy();
	/**
	 * @return \System\Void|void
	 */
	public function Demand();
	/**
	 * @param \System\Security\IPermission $target
	 * @return \System\Security\IPermission
	 */
	public function Intersect($target);
	/**
	 * @param \System\Security\IPermission $target
	 * @return \System\Boolean|bool
	 */
	public function IsSubsetOf($target);
	/**
	 * @param \System\Security\IPermission $target
	 * @return \System\Security\IPermission
	 */
	public function Union($target);
}
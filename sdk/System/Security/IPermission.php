<?php
namespace System\Security;
/**
 */
interface IPermission
{
	/**
	 */
	public function Copy();
	/**
	 */
	public function Demand();
	/**
	 * @param \System\Security\IPermission $target
	 */
	public function Intersect($target);
	/**
	 * @param \System\Security\IPermission $target
	 */
	public function IsSubsetOf($target);
	/**
	 * @param \System\Security\IPermission $target
	 */
	public function Union($target);
}

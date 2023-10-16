<?php
namespace System\Security;
/**
 */
interface IStackWalk
{
	/**
	 */
	public function Assert();
	/**
	 */
	public function Demand();
	/**
	 */
	public function Deny();
	/**
	 */
	public function PermitOnly();
}

<?php
namespace System\Security;
interface IStackWalk
{

	/**
	 * @return \System\Void|void
	 */
	public function Assert();
	/**
	 * @return \System\Void|void
	 */
	public function Demand();
	/**
	 * @return \System\Void|void
	 */
	public function Deny();
	/**
	 * @return \System\Void|void
	 */
	public function PermitOnly();
}
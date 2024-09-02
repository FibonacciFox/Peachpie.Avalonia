<?php
namespace System\Security;
interface ISecurityEncodable
{

	/**
	 * @param \System\Security\SecurityElement $e
	 * @return \System\Void|void
	 */
	public function FromXml($e);
	/**
	 * @return \System\Security\SecurityElement
	 */
	public function ToXml();
}
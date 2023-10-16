<?php
namespace System\Security;
/**
 */
interface ISecurityEncodable
{
	/**
	 * @param \System\Security\SecurityElement $e
	 */
	public function FromXml($e);
	/**
	 */
	public function ToXml();
}

<?php
namespace System\Security;
/**
 */
class AllowPartiallyTrustedCallersAttribute extends \System\Attribute
{
	/**
	 * @var \System\Security\PartialTrustVisibilityLevel
	 * @property
	 */
	public $PartialTrustVisibilityLevel;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Security\PartialTrustVisibilityLevel
	 */
	public  function get_PartialTrustVisibilityLevel(){}
	/**
	 * @param \System\Security\PartialTrustVisibilityLevel $value
	 * @return \System\Void|void
	 */
	public  function set_PartialTrustVisibilityLevel($value){}
}

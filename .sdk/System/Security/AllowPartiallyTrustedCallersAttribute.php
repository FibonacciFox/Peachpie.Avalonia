<?php
namespace System\Security;
final class AllowPartiallyTrustedCallersAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Security\PartialTrustVisibilityLevel
	 */
	public $PartialTrustVisibilityLevel;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}
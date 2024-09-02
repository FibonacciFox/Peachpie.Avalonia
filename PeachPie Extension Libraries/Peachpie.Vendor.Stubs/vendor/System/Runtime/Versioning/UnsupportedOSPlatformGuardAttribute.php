<?php
namespace System\Runtime\Versioning;
final class UnsupportedOSPlatformGuardAttribute extends \System\Runtime\Versioning\OSPlatformAttribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PlatformName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $platformName
	 */
	public function __construct($platformName){}
}
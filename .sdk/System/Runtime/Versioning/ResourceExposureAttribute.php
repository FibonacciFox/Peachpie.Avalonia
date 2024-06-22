<?php
namespace System\Runtime\Versioning;
final class ResourceExposureAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @since readonly
	 */
	public $ResourceExposureLevel;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\Versioning\ResourceScope $exposureLevel
	 */
	public function __construct($exposureLevel){}
}
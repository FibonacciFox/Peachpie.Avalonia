<?php
namespace System\Runtime\Versioning;
/**
 */
class ResourceExposureAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @property
	 */
	public readonly $ResourceExposureLevel;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\Versioning\ResourceScope
	 */
	public  function get_ResourceExposureLevel(){}
}

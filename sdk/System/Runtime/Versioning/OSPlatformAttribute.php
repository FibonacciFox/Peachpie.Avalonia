<?php
namespace System\Runtime\Versioning;
/**
 */
class OSPlatformAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $PlatformName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_PlatformName(){}
}

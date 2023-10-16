<?php
namespace System\Runtime\Versioning;
/**
 */
class UnsupportedOSPlatformAttribute extends \System\Runtime\Versioning\OSPlatformAttribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
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
	public  function get_Message(){}
}

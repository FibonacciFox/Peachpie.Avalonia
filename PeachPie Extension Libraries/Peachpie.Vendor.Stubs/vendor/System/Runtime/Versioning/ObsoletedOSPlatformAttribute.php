<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FrameworkNameOverride {
	/**
	 * @param \System\String|string $platformName
	 */
	#[MethodOverride]public function __construct_1 ($platformName){}
	/**
	 * @param \System\String|string $platformName
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($platformName, $message){}
}
final class ObsoletedOSPlatformAttribute extends \System\Runtime\Versioning\OSPlatformAttribute
{
	use FrameworkNameOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Url;
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
	 * @uses ObsoletedOSPlatformAttributeOverride::__construct_1 <br>public , args: ($platformName)<br>
	 * @uses ObsoletedOSPlatformAttributeOverride::__construct_2 <br>public , args: ($platformName, $message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
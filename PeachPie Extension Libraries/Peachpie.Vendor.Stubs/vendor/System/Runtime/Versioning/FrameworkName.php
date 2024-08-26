<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FrameworkNameOverride {
	/**
	 * @param \System\String|string $identifier
	 * @param \System\Version $version
	 */
	#[MethodOverride]public function __construct_1 ($identifier, $version){}
	/**
	 * @param \System\String|string $identifier
	 * @param \System\Version $version
	 * @param \System\String|string $profile
	 */
	#[MethodOverride]public function __construct_2 ($identifier, $version, $profile){}
	/**
	 * @param \System\String|string $frameworkName
	 */
	#[MethodOverride]public function __construct_3 ($frameworkName){}
}
final class FrameworkName extends \System\Object implements
	\System\IEquatable_1
{
	use FrameworkNameOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Identifier;
	/**
	 * @property
	 * @var \System\Version
	 * @since readonly
	 */
	public $Version;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Profile;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FullName;
	/**
	 * @param \System\Runtime\Versioning\FrameworkName $left
	 * @param \System\Runtime\Versioning\FrameworkName $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\Versioning\FrameworkName $left
	 * @param \System\Runtime\Versioning\FrameworkName $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses FrameworkNameOverride::__construct_1 <br>public , args: ($identifier, $version)<br>
	 * @uses FrameworkNameOverride::__construct_2 <br>public , args: ($identifier, $version, $profile)<br>
	 * @uses FrameworkNameOverride::__construct_3 <br>public , args: ($frameworkName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
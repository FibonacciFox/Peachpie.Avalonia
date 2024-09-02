<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MissingSatelliteAssemblyExceptionOverride {
	/**
	 * @param \System\String|string $cultureName
	 */
	#[MethodOverride]public function __construct_1 ($cultureName){}
	/**
	 * @param \System\String|string $cultureName
	 * @param \System\Resources\UltimateResourceFallbackLocation $location
	 */
	#[MethodOverride]public function __construct_2 ($cultureName, $location){}
}
final class NeutralResourcesLanguageAttribute extends \System\Attribute
{
	use MissingSatelliteAssemblyExceptionOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CultureName;
	/**
	 * @property
	 * @var \System\Resources\UltimateResourceFallbackLocation
	 * @since readonly
	 */
	public $Location;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses NeutralResourcesLanguageAttributeOverride::__construct_1 <br>public , args: ($cultureName)<br>
	 * @uses NeutralResourcesLanguageAttributeOverride::__construct_2 <br>public , args: ($cultureName, $location)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
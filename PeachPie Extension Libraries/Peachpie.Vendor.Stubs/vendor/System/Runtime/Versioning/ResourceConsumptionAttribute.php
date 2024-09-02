<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FrameworkNameOverride {
	/**
	 * @param \System\Runtime\Versioning\ResourceScope $resourceScope
	 */
	#[MethodOverride]public function __construct_1 ($resourceScope){}
	/**
	 * @param \System\Runtime\Versioning\ResourceScope $resourceScope
	 * @param \System\Runtime\Versioning\ResourceScope $consumptionScope
	 */
	#[MethodOverride]public function __construct_2 ($resourceScope, $consumptionScope){}
}
final class ResourceConsumptionAttribute extends \System\Attribute
{
	use FrameworkNameOverride;
	/**
	 * @property
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @since readonly
	 */
	public $ResourceScope;
	/**
	 * @property
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @since readonly
	 */
	public $ConsumptionScope;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses ResourceConsumptionAttributeOverride::__construct_1 <br>public , args: ($resourceScope)<br>
	 * @uses ResourceConsumptionAttributeOverride::__construct_2 <br>public , args: ($resourceScope, $consumptionScope)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
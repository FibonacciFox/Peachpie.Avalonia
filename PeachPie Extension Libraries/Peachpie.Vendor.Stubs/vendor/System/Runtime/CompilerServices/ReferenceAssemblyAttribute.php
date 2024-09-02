<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DefaultInterpolatedStringHandlerOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $description
	 */
	#[MethodOverride]public function __construct_2 ($description){}
}
final class ReferenceAssemblyAttribute extends \System\Attribute
{
	use DefaultInterpolatedStringHandlerOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses ReferenceAssemblyAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ReferenceAssemblyAttributeOverride::__construct_2 <br>public , args: ($description)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
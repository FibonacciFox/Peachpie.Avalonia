<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConcreteFormattableStringOverride {
	/**
	 * @param \System\String|string $argument
	 */
	#[MethodOverride]public function __construct_1 ($argument){}
	/**
	 * @param \System\String ...$arguments
	 */
	#[MethodOverride]public function __construct_2 (...$arguments){}
}
final class InterpolatedStringHandlerArgumentAttribute extends \System\Attribute
{
	use ConcreteFormattableStringOverride;

	/**
	 * @property
	 * @var \System\String[]|array
	 * @since readonly
	 */
	public $Arguments;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses InterpolatedStringHandlerArgumentAttributeOverride::__construct_1 <br>public , args: ($argument)<br>
	 * @uses InterpolatedStringHandlerArgumentAttributeOverride::__construct_2 <br>public , args: (...$arguments)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
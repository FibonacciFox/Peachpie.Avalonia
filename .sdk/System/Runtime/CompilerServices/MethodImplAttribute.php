<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DefaultInterpolatedStringHandlerOverride {
	/**
	 * @param \System\Runtime\CompilerServices\MethodImplOptions $methodImplOptions
	 */
	#[MethodOverride]public function __construct_1 ($methodImplOptions){}
	/**
	 * @param \System\Int16 $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 */
	#[MethodOverride]public function __construct_3 (){}
}
final class MethodImplAttribute extends \System\Attribute
{
	use DefaultInterpolatedStringHandlerOverride;

	/**
	 * @field
	 * @var \System\Runtime\CompilerServices\MethodCodeType
	 */
	public $MethodCodeType;
	/**
	 * @property
	 * @var \System\Runtime\CompilerServices\MethodImplOptions
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses MethodImplAttributeOverride::__construct_1 <br>public , args: ($methodImplOptions)<br>
	 * @uses MethodImplAttributeOverride::__construct_2 <br>public , args: ($value)<br>
	 * @uses MethodImplAttributeOverride::__construct_3 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
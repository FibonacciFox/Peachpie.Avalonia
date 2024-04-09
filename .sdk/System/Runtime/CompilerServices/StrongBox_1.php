<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeWrappedExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \T|object $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
class StrongBox_1 extends \System\Object implements
	\System\Runtime\CompilerServices\IStrongBox
{
	use RuntimeWrappedExceptionOverride;
	/**
	 * @field
	 * @var \T|object
	 */
	public $Value;
	private function get_Value(){}
	private function set_Value($value){}
	/**
	 * @uses StrongBox_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses StrongBox_1Override::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
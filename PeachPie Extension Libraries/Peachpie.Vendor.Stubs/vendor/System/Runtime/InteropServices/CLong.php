<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CLongOverride {
	/**
	 * @param \System\Int32|int $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\IntPtr $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class CLong extends \System\ValueType implements
	\System\IEquatable_1
{
	use CLongOverride;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Value;
	/**
	 * @uses CLongOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses CLongOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
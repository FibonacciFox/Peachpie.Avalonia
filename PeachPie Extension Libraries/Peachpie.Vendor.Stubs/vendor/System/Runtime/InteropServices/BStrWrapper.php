<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArrayWithOffsetOverride {
	/**
	 * @param \System\String|string $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class BStrWrapper extends \System\Object
{
	use ArrayWithOffsetOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $WrappedObject;
	/**
	 * @uses BStrWrapperOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses BStrWrapperOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
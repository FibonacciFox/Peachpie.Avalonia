<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CULongOverride {
	/**
	 * @param \System\Decimal $obj
	 */
	#[MethodOverride]public function __construct_1 ($obj){}
	/**
	 * @param \System\Object|object $obj
	 */
	#[MethodOverride]public function __construct_2 ($obj){}
}
final class CurrencyWrapper extends \System\Object
{
	use CULongOverride;
	/**
	 * @property
	 * @var \System\Decimal
	 * @since readonly
	 */
	public $WrappedObject;
	/**
	 * @uses CurrencyWrapperOverride::__construct_1 <br>public , args: ($obj)<br>
	 * @uses CurrencyWrapperOverride::__construct_2 <br>public , args: ($obj)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
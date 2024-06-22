<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Net5CompatDerivedImplOverride {
	/**
	 * @param \System\Random $parent
	 */
	#[MethodOverride]public function __construct_1 ($parent){}
	/**
	 * @param \System\Random $parent
	 * @param \System\Int32|int $seed
	 */
	#[MethodOverride]public function __construct_2 ($parent, $seed){}
}
final class Net5CompatDerivedImpl extends \System\ImplBase
{
	use Net5CompatDerivedImplOverride;


	private function NextUInt64(){}
	/**
	 * @uses Net5CompatDerivedImplOverride::__construct_1 <br>public , args: ($parent)<br>
	 * @uses Net5CompatDerivedImplOverride::__construct_2 <br>public , args: ($parent, $seed)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
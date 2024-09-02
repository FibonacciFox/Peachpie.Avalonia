<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LazyHelperOverride {
	/**
	 * @param \System\Byte $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\LoaderOptimization $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class LoaderOptimizationAttribute extends \System\Attribute
{
	use LazyHelperOverride;
	/**
	 * @property
	 * @var \System\LoaderOptimization
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
	 * @uses LoaderOptimizationAttributeOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses LoaderOptimizationAttributeOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
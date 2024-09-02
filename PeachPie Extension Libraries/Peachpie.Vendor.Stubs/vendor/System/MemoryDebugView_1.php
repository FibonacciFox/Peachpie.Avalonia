<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Memory_1Override {
	/**
	 * @param \System\Memory_1 $memory [generic: T]
	 */
	#[MethodOverride]public function __construct_1 ($memory){}
	/**
	 * @param \System\ReadOnlyMemory_1 $memory [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($memory){}
}
final class MemoryDebugView_1 extends \System\Object
{
	use Memory_1Override;
	/**
	 * @property
	 * @var \T[]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @uses MemoryDebugView_1Override::__construct_1 <br>public , args: ($memory)<br>
	 * @uses MemoryDebugView_1Override::__construct_2 <br>public , args: ($memory)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
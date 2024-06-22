<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlySpan_1Override {
	/**
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_1 ($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Reflection\Assembly $requestingAssembly
	 */
	#[MethodOverride]public function __construct_2 ($name, $requestingAssembly){}
}
class ResolveEventArgs extends \System\EventArgs
{
	use ReadOnlySpan_1Override;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Reflection\Assembly
	 * @since readonly
	 */
	public $RequestingAssembly;
	/**
	 * @uses ResolveEventArgsOverride::__construct_1 <br>public , args: ($name)<br>
	 * @uses ResolveEventArgsOverride::__construct_2 <br>public , args: ($name, $requestingAssembly)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
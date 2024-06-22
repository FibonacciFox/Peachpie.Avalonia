<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AbandonedMutexExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Action_1 $valueChangedHandler [generic: System\Threading\AsyncLocalValueChangedArgs_1[T]
	 */
	#[MethodOverride]public function __construct_2 ($valueChangedHandler){}
}
final class AsyncLocal_1 extends \System\Object implements
	\System\Threading\IAsyncLocal
{
	use AbandonedMutexExceptionOverride;

	/**
	 * @property
	 * @var \T|object
	 */
	public $Value;
	private function OnValueChanged($previousValueObj, $currentValueObj, $contextChanged){}
	/**
	 * @uses AsyncLocal_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses AsyncLocal_1Override::__construct_2 <br>public , args: ($valueChangedHandler)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
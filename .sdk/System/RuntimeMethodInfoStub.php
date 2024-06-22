<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeTypeHandleOverride {
	/**
	 * @param \System\RuntimeMethodHandleInternal $methodHandleValue
	 * @param \System\Object|object $keepalive
	 */
	#[MethodOverride]public function __construct_1 ($methodHandleValue, $keepalive){}
	/**
	 * @param \System\IntPtr $methodHandleValue
	 * @param \System\Object|object $keepalive
	 */
	#[MethodOverride]public function __construct_2 ($methodHandleValue, $keepalive){}
}
final class RuntimeMethodInfoStub extends \System\Object implements
	\System\IRuntimeMethodInfo
{
	use RuntimeTypeHandleOverride;

	/**
	 * @field
	 * @var \System\RuntimeMethodHandleInternal
	 */
	public $m_value;
	private function get_Value(){}
	/**
	 * @uses RuntimeMethodInfoStubOverride::__construct_1 <br>public , args: ($methodHandleValue, $keepalive)<br>
	 * @uses RuntimeMethodInfoStubOverride::__construct_2 <br>public , args: ($methodHandleValue, $keepalive)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
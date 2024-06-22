<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArgIteratorOverride {
	/**
	 * @deprecated
	 * @return \System\TypedReference
	 */
	#[MethodOverride]public function GetNextArg_1 (){}
	/**
	 * @deprecated
	 * @param \System\RuntimeTypeHandle $rth
	 * @return \System\TypedReference
	 */
	#[MethodOverride]public function GetNextArg_2 ($rth){}
	/**
	 * @param \System\RuntimeArgumentHandle $arglist
	 */
	#[MethodOverride]public function __construct_1 ($arglist){}
	/**
	 * @param \System\RuntimeArgumentHandle $arglist
	 * @param \System\Void* $ptr
	 */
	#[MethodOverride]public function __construct_2 ($arglist, $ptr){}
}
final class ArgIterator extends \System\ValueType
{
	use ArgIteratorOverride;


	/**
	 * @return \System\Void|void
	 */
	public function End(){}
	/**
	 * @uses ArgIteratorOverride::GetNextArg_1 <br>public , args: ()<br>
	 * @uses ArgIteratorOverride::GetNextArg_2 <br>public , args: ($rth)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TypedReference|mixed|\override
	 */
	#[MethodOverridePublic]function GetNextArg (\override ...$args){}
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	public function GetNextArgType(){}
	/**
	 * @return \System\Int32|int
	 */
	public function GetRemainingCount(){}
	/**
	 * @uses ArgIteratorOverride::__construct_1 <br>public , args: ($arglist)<br>
	 * @uses ArgIteratorOverride::__construct_2 <br>public , args: ($arglist, $ptr)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
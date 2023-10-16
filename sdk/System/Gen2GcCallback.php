<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Gen2GcCallbackMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Register_1($callback){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Register_2($callback, $targetObj){}
}
/**
 */
class Gen2GcCallback extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject
{
	/**
	 * @uses Gen2GcCallbackMethodsOverride::Register_1 ($callback)
	 * @uses Gen2GcCallbackMethodsOverride::Register_2 ($callback, $targetObj)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Register(mixed ...$args){}
}

<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Gen2GcCallbackOverride {
	/**
	 * @deprecated
	 * @param \System\Func_1 $callback [generic: System\Boolean]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Register_1 ($callback){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $callback [generic: System\Object,System\Boolean]
	 * @param \System\Object|object $targetObj
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Register_2 ($callback, $targetObj){}
}
final class Gen2GcCallback extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject
{
	use Gen2GcCallbackOverride;


	/**
	 * @uses Gen2GcCallbackOverride::Register_1 <br>public , args: ($callback)<br>
	 * @uses Gen2GcCallbackOverride::Register_2 <br>public , args: ($callback, $targetObj)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Register (\override ...$args){}
}
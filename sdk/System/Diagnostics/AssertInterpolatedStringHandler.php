<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssertInterpolatedStringHandlerMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_2($value, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_3($value, $alignment){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_4($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_5($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_6($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_7($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_8($value, $alignment, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AppendFormatted_9($value, $alignment, $format){}
}
/**
 */
class AssertInterpolatedStringHandler extends \System\ValueType
{
	/**
	 * @return \System\String|string
	 */
	protected  function ToStringAndClear(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function AppendLiteral($value){}
	/**
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_1 ($value)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_2 ($value, $format)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_3 ($value, $alignment)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_4 ($value, $alignment, $format)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_5 ($value)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_6 ($value, $alignment, $format)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_7 ($value)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_8 ($value, $alignment, $format)
	 * @uses AssertInterpolatedStringHandlerMethodsOverride::AppendFormatted_9 ($value, $alignment, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AppendFormatted(mixed ...$args){}
}

<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AppendInterpolatedStringHandlerMethodsOverride
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
class AppendInterpolatedStringHandler extends \System\ValueType
{
	/**
	 * @var \System\Text\StringBuilder
	 * @field
	 */
	protected readonly $_stringBuilder;
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function AppendLiteral($value){}
	/**
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_1 ($value)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_2 ($value, $format)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_3 ($value, $alignment)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_4 ($value, $alignment, $format)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_5 ($value)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_6 ($value, $alignment, $format)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_7 ($value)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_8 ($value, $alignment, $format)
	 * @uses AppendInterpolatedStringHandlerMethodsOverride::AppendFormatted_9 ($value, $alignment, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AppendFormatted(mixed ...$args){}
	/**
	 * @param \System\Text\T $value
	 * @param \System\Int32|int $alignment
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendFormattedWithTempSpace($value, $alignment, $format){}
	/**
	 * @param \System\Text\T $value
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendCustomFormatter($value, $format){}
}

<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TryWriteInterpolatedStringHandlerMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_2($value, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_3($value, $alignment){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_4($value, $alignment, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_5($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_6($value, $alignment, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_7($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_8($value, $alignment, $format){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function AppendFormatted_9($value, $alignment, $format){}
}
/**
 */
class TryWriteInterpolatedStringHandler extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_pos;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_success;
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public  function AppendLiteral($value){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendStringDirect($value){}
	/**
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_1 ($value)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_2 ($value, $format)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_3 ($value, $alignment)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_4 ($value, $alignment, $format)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_5 ($value)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_6 ($value, $alignment, $format)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_7 ($value)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_8 ($value, $alignment, $format)
	 * @uses TryWriteInterpolatedStringHandlerMethodsOverride::AppendFormatted_9 ($value, $alignment, $format)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AppendFormatted(mixed ...$args){}
	/**
	 * @param \System\T $value
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendCustomFormatter($value, $format){}
	/**
	 * @param \System\Int32|int $startingPos
	 * @param \System\Int32|int $alignment
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAppendOrInsertAlignmentIfNeeded($startingPos, $alignment){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Fail(){}
}

<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TraceLoggingDataCollectorMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AddScalar_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AddScalar_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AddScalar_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function AddScalar_4($value){}
}
/**
 */
class TraceLoggingDataCollector extends \System\Object
{
	/**
	 * @return \System\Int32|int
	 */
	public static function BeginBufferedArray(){}
	/**
	 * @param \System\Int32|int $bookmark
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public static function EndBufferedArray($bookmark, $count){}
	/**
	 * @uses TraceLoggingDataCollectorMethodsOverride::AddScalar_1 ($value)
	 * @uses TraceLoggingDataCollectorMethodsOverride::AddScalar_2 ($value)
	 * @uses TraceLoggingDataCollectorMethodsOverride::AddScalar_3 ($value)
	 * @uses TraceLoggingDataCollectorMethodsOverride::AddScalar_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddScalar(mixed ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public static function AddNullTerminatedString($value){}
	/**
	 * @param \System\Diagnostics\Tracing\PropertyValue $value
	 * @param \System\Int32|int $elementSize
	 * @return \System\Void|void
	 */
	public static function AddArray($value, $elementSize){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TraceLoggingDataCollectorOverride {
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\PropertyValue $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AddScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AddScalar_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AddScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function AddScalar_4 ($value){}
}
class TraceLoggingDataCollector extends \System\Object
{
	use TraceLoggingDataCollectorOverride;


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
	 * @uses TraceLoggingDataCollectorOverride::AddScalar_1 <br>public , args: ($value)<br>
	 * @uses TraceLoggingDataCollectorOverride::AddScalar_2 <br>public , args: ($value)<br>
	 * @uses TraceLoggingDataCollectorOverride::AddScalar_3 <br>public , args: ($value)<br>
	 * @uses TraceLoggingDataCollectorOverride::AddScalar_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddScalar (\override ...$args){}
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
}
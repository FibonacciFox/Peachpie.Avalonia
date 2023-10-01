<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LoggerMethodsOverride
{
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function TryGet_1($level, $area){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryGet_2($level, $area, $outLogger){}
}
/**
 */
class Logger extends \System\Object
{
	/**
	 * @return \Avalonia\Logging\ILogSink
	 */
	public static function get_Sink(){}
	/**
	 * @param \Avalonia\Logging\ILogSink $value
	 * @return \System\Void|void
	 */
	public static function set_Sink($value){}
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Boolean
	 */
	public static function IsEnabled($level, $area){}
	/**
	 * @uses LoggerMethodsOverride::TryGet_1 ($level, $area)
	 * @uses LoggerMethodsOverride::TryGet_2 ($level, $area, $outLogger)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGet(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Logging;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LoggerOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]public static function TryGet_1 ($level, $area){}
	/**
	 * @deprecated
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @param \Avalonia\Logging\ParametrizedLogger& &$outLogger
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryGet_2 ($level, $area, &$outLogger){}
}
class Logger extends \System\Object
{
	use LoggerOverride;
	/**
	 * @property
	 * @var \Avalonia\Logging\ILogSink
	 */
	public $Sink;
	/**
	 * @param \Avalonia\Logging\LogEventLevel $level
	 * @param \System\String|string $area
	 * @return \System\Boolean|bool
	 */
	public static function IsEnabled($level, $area){}
	/**
	 * @uses LoggerOverride::TryGet_1 <br>public , args: ($level, $area)<br>
	 * @uses LoggerOverride::TryGet_2 <br>public , args: ($level, $area, &$outLogger)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Nullable_1|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryGet (\override ...$args){}
}
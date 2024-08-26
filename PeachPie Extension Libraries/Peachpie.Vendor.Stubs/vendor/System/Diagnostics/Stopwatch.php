<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StopwatchOverride {
	/**
	 * @deprecated
	 * @param \System\Int64|int $startingTimestamp
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function GetElapsedTime_1 ($startingTimestamp){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $startingTimestamp
	 * @param \System\Int64|int $endingTimestamp
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function GetElapsedTime_2 ($startingTimestamp, $endingTimestamp){}
}
class Stopwatch extends \System\Object
{
	use StopwatchOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int64|int
	 */
	public static $Frequency;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	public static $IsHighResolution;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsRunning;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $Elapsed;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $ElapsedMilliseconds;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $ElapsedTicks;
	/**
	 * @return \System\Void|void
	 */
	public function Start(){}
	/**
	 * @return \System\Diagnostics\Stopwatch
	 */
	public static function StartNew(){}
	/**
	 * @return \System\Void|void
	 */
	public function Stop(){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 * @return \System\Void|void
	 */
	public function Restart(){}
	/**
	 * @return \System\Int64|int
	 */
	public static function GetTimestamp(){}
	/**
	 * @uses StopwatchOverride::GetElapsedTime_1 <br>public , args: ($startingTimestamp)<br>
	 * @uses StopwatchOverride::GetElapsedTime_2 <br>public , args: ($startingTimestamp, $endingTimestamp)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function GetElapsedTime (\override ...$args){}
	private function GetRawElapsedTicks(){}
	private function GetElapsedDateTimeTicks(){}
	private static function QueryPerformanceCounter(){}
	/**
	 */
	public function __construct(){}
}
<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StopwatchHelperOverride {
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
class StopwatchHelper extends \System\Object
{
	use StopwatchHelperOverride;

	/**
	 * @uses StopwatchHelperOverride::GetElapsedTime_1 <br>public , args: ($startingTimestamp)<br>
	 * @uses StopwatchHelperOverride::GetElapsedTime_2 <br>public , args: ($startingTimestamp, $endingTimestamp)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function GetElapsedTime (\override ...$args){}
}
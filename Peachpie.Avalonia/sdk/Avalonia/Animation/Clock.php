<?php
namespace Avalonia\Animation;
/**
 */
class Clock extends \Avalonia\Animation\ClockBase implements 
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	/**
	 * @return \Avalonia\Animation\IClock
	 */
	public static function get_GlobalClock(){}
}

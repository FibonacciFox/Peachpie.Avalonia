<?php
namespace Avalonia\Animation;
/**
 */
class Clock extends \Avalonia\Animation\ClockBase implements 
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	/**
	 * @var \Avalonia\Animation\IClock
	 * @property
	 */
	public readonly $GlobalClock;
	/**
	 * @var \Avalonia\Animation\PlayState
	 * @property
	 */
	public $PlayState;
	/**
	 * @return \Avalonia\Animation\IClock
	 */
	public static function get_GlobalClock(){}
}

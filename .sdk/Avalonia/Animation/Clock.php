<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AnimatorKeyFrameOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Animation\IClock $parent
	 */
	#[MethodOverride]public function __construct_2 ($parent){}
}
class Clock extends \Avalonia\Animation\ClockBase implements
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{
	use AnimatorKeyFrameOverride;

	/**
	 * @property
	 * @var \Avalonia\Animation\IClock
	 * @since readonly
	 */
	public $GlobalClock;
	/**
	 * @property
	 * @var \Avalonia\Animation\PlayState
	 */
	public $PlayState;
	/**
	 * @uses ClockOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ClockOverride::__construct_2 <br>public , args: ($parent)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
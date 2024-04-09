<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CrossFadeOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function Start_1 ($from, $to, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $from
	 * @param \Avalonia\Visual $to
	 * @param \System\Boolean|bool $forward
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function Start_2 ($from, $to, $forward, $cancellationToken){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\TimeSpan $duration
	 */
	#[MethodOverride]public function __construct_2 ($duration){}
}
class CrossFade extends \System\Object implements
	\Avalonia\Animation\IPageTransition
{
	use CrossFadeOverride;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $FadeInEasing;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $FadeOutEasing;
	/**
	 * @uses CrossFadeOverride::Start_1 <br>public , args: ($from, $to, $cancellationToken)<br>
	 * @uses CrossFadeOverride::Start_2 <br>private , args: ($from, $to, $forward, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function Start (\override ...$args){}
	/**
	 * @uses CrossFadeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses CrossFadeOverride::__construct_2 <br>public , args: ($duration)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
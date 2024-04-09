<?php
namespace Avalonia\Animation;
class DisposeAnimationInstanceSubject_1 extends \System\Object implements
	\System\IObserver_1,
	\System\IDisposable
{

	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	private function OnNext($matchVal){}
	/**
	 * @param \Avalonia\Animation\Animators\Animator_1 $animator [generic: T]
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Action $onComplete
	 */
	public function __construct($animator, $animation, $control, $clock, $onComplete){}
}
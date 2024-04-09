<?php
namespace Avalonia\Animation;
class AnimatorTransitionObservable_2 extends \Avalonia\Animation\TransitionObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{

	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \TAnimator $animator
	 * @param \System\IObservable_1 $progress [generic: System\Double]
	 * @param \Avalonia\Animation\Easings\IEasing $easing
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 */
	public function __construct($animator, $progress, $easing, $oldValue, $newValue){}
}
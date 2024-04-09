<?php
namespace Avalonia\Animation;
final class IncompatibleTransitionObservable extends \Avalonia\Animation\TransitionObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{

	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \System\IObservable_1 $progress [generic: System\Double]
	 * @param \Avalonia\Animation\Easings\Easing $easing
	 * @param \Avalonia\Media\IEffect $from
	 * @param \Avalonia\Media\IEffect $to
	 */
	public function __construct($progress, $easing, $from, $to){}
}
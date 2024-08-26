<?php
namespace Avalonia\Animation;
class TransitionInstance extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{

	private function TimerTick($t){}
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\TimeSpan $delay
	 * @param \System\TimeSpan $duration
	 */
	public function __construct($clock, $delay, $duration){}
}
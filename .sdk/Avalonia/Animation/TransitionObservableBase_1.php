<?php
namespace Avalonia\Animation;
class TransitionObservableBase_1 extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable,
	\System\IObserver_1
{


	/**
	 * @param \System\Double|double $progress
	 * @return \T|object
	 */
	abstract protected function ProduceValue($progress);
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
}
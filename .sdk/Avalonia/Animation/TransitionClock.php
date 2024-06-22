<?php
namespace Avalonia\Animation;
final class TransitionClock extends \Avalonia\Animation\ClockBase implements
	\Avalonia\Animation\IClock,
	\System\IObservable_1,
	\System\IObserver_1
{

	/**
	 * @property
	 * @var \Avalonia\Animation\PlayState
	 */
	public $PlayState;
	private function OnNext($value){}
	private function OnCompleted(){}
	private function OnError($error){}
	/**
	 * @param \Avalonia\Animation\IClock $parent
	 */
	public function __construct($parent){}
}
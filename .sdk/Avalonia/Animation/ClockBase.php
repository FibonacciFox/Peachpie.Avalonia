<?php
namespace Avalonia\Animation;
class ClockBase extends \System\Object implements
	\Avalonia\Animation\IClock,
	\System\IObservable_1
{

	/**
	 * @property
	 * @var \Avalonia\Animation\PlayState
	 */
	public $PlayState;
	/**
	 * @param \System\TimeSpan $systemTime
	 * @return \System\Void|void
	 */
	protected function Pulse($systemTime){}
	/**
	 * @return \System\Void|void
	 */
	protected function Stop(){}
	/**
	 * @param \System\IObserver_1 $observer [generic: System\TimeSpan]
	 * @return \System\IDisposable
	 */
	public function Subscribe($observer){}
}
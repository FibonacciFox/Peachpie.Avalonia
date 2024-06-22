<?php
namespace Avalonia\Animation;
final class ClockObservable extends \Avalonia\Reactive\LightweightObservableBase_1 implements
	\System\IObservable_1
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasSubscriptions;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasObservers;
	/**
	 * @param \System\TimeSpan $time
	 * @return \System\Void|void
	 */
	public function Pulse($time){}
	/**
	 */
	public function __construct(){}
}
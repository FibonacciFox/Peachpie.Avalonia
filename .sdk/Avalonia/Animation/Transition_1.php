<?php
namespace Avalonia\Animation;
class Transition_1 extends \Avalonia\Animation\TransitionBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Animation\ITransition
{

	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Delay;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $Easing;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function OnPropertyPropertyChanged($e){}
	/**
	 * @param \System\IObservable_1 $progress [generic: System\Double]
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \System\IObservable_1[T]
	 */
	abstract protected function DoTransition($progress, $oldValue, $newValue);
	private function GetPropertyChangedSubscribers(){}
}
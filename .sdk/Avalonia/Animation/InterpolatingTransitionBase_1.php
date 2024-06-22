<?php
namespace Avalonia\Animation;
class InterpolatingTransitionBase_1 extends \Avalonia\Animation\Transition_1 implements
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
	/**
	 * @param \System\Double|double $progress
	 * @param \T|object $from
	 * @param \T|object $to
	 * @return \T|object
	 */
	abstract protected function Interpolate($progress, $from, $to);
	private function GetPropertyChangedSubscribers(){}
}
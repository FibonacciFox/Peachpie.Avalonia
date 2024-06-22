<?php
namespace Avalonia\Animation;
class EffectTransition extends \Avalonia\Animation\Transition_1 implements
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
	private function TryWithAnimator($progress, $animator, $oldValue, $newValue, $defaultValue, &$observable){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}
<?php
namespace Avalonia\Animation\Animators;
class Animator_1 extends \Avalonia\Collections\AvaloniaList_1 implements
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug,
	\Avalonia\Animation\IAnimator
{

	/**
	 * @property
	 * @var \Avalonia\AvaloniaProperty
	 */
	public $Property;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Collections\ResetBehavior
	 */
	public $ResetBehavior;
	/**
	 * @property
	 * @var \System\Action_1[Avalonia\Animation\AnimatorKeyFrame]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \Avalonia\Animation\AnimatorKeyFrame
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match [generic: System\Boolean]
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	public function Apply($animation, $control, $clock, $match, $onComplete){}
	/**
	 * @param \System\Double|double $animationTime
	 * @param \T|object $neutralValue
	 * @return \T|object
	 */
	protected function InterpolationHandler($animationTime, $neutralValue){}
	private function FindKeyFrames($time){}
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \System\IObservable_1 $instance [generic: T]
	 * @return \System\IDisposable
	 */
	public function BindAnimation($control, $instance){}
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	protected function Run($animation, $control, $clock, $onComplete){}
	/**
	 * @param \System\Double|double $progress
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \T|object
	 */
	abstract public function Interpolate($progress, $oldValue, $newValue);
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
}
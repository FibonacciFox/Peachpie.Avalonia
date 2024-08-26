<?php
namespace Avalonia\Animation;
class AnimationInstance_1 extends \Avalonia\Reactive\SingleSubscriberObservableBase_1 implements
	\System\IObservable_1,
	\System\IDisposable
{

	private function FetchProperties(){}
	/**
	 * @param \System\TimeSpan $frameTick
	 * @return \System\Void|void
	 */
	public function Step($frameTick){}
	private function ApplyFinalFill(){}
	private function DoComplete(){}
	private function DoDelay(){}
	private function DoPlayStates(){}
	private function InternalStep($time){}
	private function UpdateNeutralValue(){}
	private function ControlPropertyChanged($sender, $e){}
	/**
	 * @param \Avalonia\Animation\Animation $animation
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\Animators\Animator_1 $animator [generic: T]
	 * @param \Avalonia\Animation\IClock $baseClock
	 * @param \System\Action $OnComplete
	 * @param \System\Func_3 $Interpolator [generic: System\Double,T,T]
	 */
	public function __construct($animation, $control, $animator, $baseClock, $OnComplete, $Interpolator){}
}
<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AnimationOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @param \Avalonia\Animation\CustomAnimatorBase $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAnimator_1 ($setter, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @param \Avalonia\Animation\ICustomAnimator $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetAnimator_2 ($setter, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match [generic: System\Boolean]
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	#[MethodOverride]private function Apply_1 ($control, $clock, $match, $onComplete){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\IObservable_1 $match [generic: System\Boolean]
	 * @param \System\Action $onComplete
	 * @return \System\IDisposable
	 */
	#[MethodOverride]protected function Apply_2 ($control, $clock, $match, $onComplete){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]public function RunAsync_1 ($control, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected function RunAsync_2 ($control, $clock){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]private function RunAsync_3 ($control, $clock, $cancellationToken){}
	/**
	 * @deprecated
	 * @param \Avalonia\Animation\Animatable $control
	 * @param \Avalonia\Animation\IClock $clock
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected function RunAsync_4 ($control, $clock, $cancellationToken){}
}
final class Animation extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Animation\IAnimation
{
	use AnimationOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,System\TimeSpan]
	 */
	public static $DurationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,Avalonia\Animation\IterationCount]
	 */
	public static $IterationCountProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,Avalonia\Animation\PlaybackDirection]
	 */
	public static $PlaybackDirectionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,Avalonia\Animation\FillMode]
	 */
	public static $FillModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,Avalonia\Animation\Easings\Easing]
	 */
	public static $EasingProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,System\TimeSpan]
	 */
	public static $DelayProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,System\TimeSpan]
	 */
	public static $DelayBetweenIterationsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Animation\Animation,System\Double]
	 */
	public static $SpeedRatioProperty;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \Avalonia\Animation\IterationCount
	 */
	public $IterationCount;
	/**
	 * @property
	 * @var \Avalonia\Animation\PlaybackDirection
	 */
	public $PlaybackDirection;
	/**
	 * @property
	 * @var \Avalonia\Animation\FillMode
	 */
	public $FillMode;
	/**
	 * @property
	 * @var \Avalonia\Animation\Easings\Easing
	 */
	public $Easing;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Delay;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $DelayBetweenIterations;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $SpeedRatio;
	/**
	 * @property
	 * @var \Avalonia\Animation\KeyFrames
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses AnimationOverride::SetAnimator_1 <br>public , args: ($setter, $value)<br>
	 * @uses AnimationOverride::SetAnimator_2 <br>public , args: ($setter, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetAnimator (\override ...$args){}
	private static function RegisterAnimator(){}
	/**
	 * @return \System\Void|void
	 */
	public static function RegisterCustomAnimator(){}
	private static function GetAnimatorType($property){}
	/**
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @return \System\Nullable_1[System\ValueTuple_2[System\Type,System\Func_1[Avalonia\Animation\IAnimator]]]
	 */
	protected static function GetAnimator($setter){}
	private function InterpretKeyframes($control){}
	/**
	 * @uses AnimationOverride::Apply_1 <br>private , args: ($control, $clock, $match, $onComplete)<br>
	 * @uses AnimationOverride::Apply_2 <br>protected , args: ($control, $clock, $match, $onComplete)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverrideProtected]function Apply (\override ...$args){}
	/**
	 * @uses AnimationOverride::RunAsync_1 <br>public , args: ($control, $cancellationToken)<br>
	 * @uses AnimationOverride::RunAsync_2 <br>protected , args: ($control, $clock)<br>
	 * @uses AnimationOverride::RunAsync_3 <br>private , args: ($control, $clock, $cancellationToken)<br>
	 * @uses AnimationOverride::RunAsync_4 <br>protected , args: ($control, $clock, $cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|mixed|\override
	 */
	#[MethodOverridePublic]function RunAsync (\override ...$args){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}
<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AnimationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAnimator_1($setter, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetAnimator_2($setter, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] private  function Apply_1($control, $clock, $match, $onComplete){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] protected  function Apply_2($control, $clock, $match, $onComplete){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] public  function RunAsync_1($control, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] protected  function RunAsync_2($control, $clock){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] private  function RunAsync_3($control, $clock, $cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] protected  function RunAsync_4($control, $clock, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_2($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($binding, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
class Animation extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Animation\IAnimation
{
	/**
	 * @uses AnimationMethodsOverride::SetAnimator_1 ($setter, $value)
	 * @uses AnimationMethodsOverride::SetAnimator_2 ($setter, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetAnimator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RegisterAnimator(){}
	/**
	 * @return \System\Void|void
	 */
	public static function RegisterCustomAnimator(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAnimatorType($property){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Duration(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Duration($value){}
	/**
	 * @return \Avalonia\Animation\IterationCount
	 */
	public  function get_IterationCount(){}
	/**
	 * @param \Avalonia\Animation\IterationCount $value
	 * @return \System\Void|void
	 */
	public  function set_IterationCount($value){}
	/**
	 * @return \Avalonia\Animation\PlaybackDirection
	 */
	public  function get_PlaybackDirection(){}
	/**
	 * @param \Avalonia\Animation\PlaybackDirection $value
	 * @return \System\Void|void
	 */
	public  function set_PlaybackDirection($value){}
	/**
	 * @return \Avalonia\Animation\FillMode
	 */
	public  function get_FillMode(){}
	/**
	 * @param \Avalonia\Animation\FillMode $value
	 * @return \System\Void|void
	 */
	public  function set_FillMode($value){}
	/**
	 * @return \Avalonia\Animation\Easings\Easing
	 */
	public  function get_Easing(){}
	/**
	 * @param \Avalonia\Animation\Easings\Easing $value
	 * @return \System\Void|void
	 */
	public  function set_Easing($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_Delay(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_Delay($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_DelayBetweenIterations(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_DelayBetweenIterations($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_SpeedRatio(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_SpeedRatio($value){}
	/**
	 * @return \Avalonia\Animation\KeyFrames
	 */
	public  function get_Children(){}
	/**
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @return \System\Nullable_1
	 */
	protected static function GetAnimator($setter){}
	/**
	 * @param \Avalonia\Animation\Animatable $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InterpretKeyframes($control){}
	/**
	 * @uses AnimationMethodsOverride::Apply_1 ($control, $clock, $match, $onComplete)
	 * @uses AnimationMethodsOverride::Apply_2 ($control, $clock, $match, $onComplete)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Apply(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::RunAsync_1 ($control, $cancellationToken)
	 * @uses AnimationMethodsOverride::RunAsync_2 ($control, $clock)
	 * @uses AnimationMethodsOverride::RunAsync_3 ($control, $clock, $cancellationToken)
	 * @uses AnimationMethodsOverride::RunAsync_4 ($control, $clock, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RunAsync(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses AnimationMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses AnimationMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::get_Item_1 ($property)
	 * @uses AnimationMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::set_Item_1 ($property, $value)
	 * @uses AnimationMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::ClearValue_1 ($property)
	 * @uses AnimationMethodsOverride::ClearValue_2 ($property)
	 * @uses AnimationMethodsOverride::ClearValue_3 ($property)
	 * @uses AnimationMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::GetValue_1 ($property)
	 * @uses AnimationMethodsOverride::GetValue_2 ($property)
	 * @uses AnimationMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses AnimationMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses AnimationMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses AnimationMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses AnimationMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses AnimationMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses AnimationMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses AnimationMethodsOverride::Bind_5 ($property, $source)
	 * @uses AnimationMethodsOverride::Bind_6 ($property, $source)
	 * @uses AnimationMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses AnimationMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses AnimationMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimationMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses AnimationMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

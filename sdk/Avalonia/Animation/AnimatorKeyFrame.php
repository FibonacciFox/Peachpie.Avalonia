<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AnimatorKeyFrameMethodsOverride
{
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
class AnimatorKeyFrame extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \System\Type
	 */
	public  function get_AnimatorType(){}
	/**
	 * @return \System\Func_1
	 */
	public  function get_AnimatorFactory(){}
	/**
	 * @return \Avalonia\Animation\Cue
	 */
	public  function get_Cue(){}
	/**
	 * @return \Avalonia\Animation\KeySpline
	 */
	public  function get_KeySpline(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Property($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @param \Avalonia\Animation\IAnimationSetter $setter
	 * @param \Avalonia\Animation\Animatable $targetControl
	 * @return \System\IDisposable
	 */
	public  function BindSetter($setter, $targetControl){}
	/**
	 * @return \Avalonia\Animation\T
	 */
	public  function GetTypedValue(){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses AnimatorKeyFrameMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses AnimatorKeyFrameMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::get_Item_1 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::set_Item_1 ($property, $value)
	 * @uses AnimatorKeyFrameMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::ClearValue_1 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::ClearValue_2 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::ClearValue_3 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::GetValue_1 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::GetValue_2 ($property)
	 * @uses AnimatorKeyFrameMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses AnimatorKeyFrameMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_5 ($property, $source)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_6 ($property, $source)
	 * @uses AnimatorKeyFrameMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses AnimatorKeyFrameMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses AnimatorKeyFrameMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses AnimatorKeyFrameMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

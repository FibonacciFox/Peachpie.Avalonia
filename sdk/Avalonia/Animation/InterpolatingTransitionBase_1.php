<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InterpolatingTransitionBase_1MethodsOverride
{
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] public  function get_Property_1(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	#[MethodOverride] private  function get_Property_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Property_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Property_2($value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] private  function Apply_1($control, $clock, $oldValue, $newValue){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] protected  function Apply_2($control, $clock, $oldValue, $newValue){}
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
 * @deprecated this element should not be used by you because it will break your program
 */
class InterpolatingTransitionBase_1 extends \Avalonia\Animation\Transition_1 implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Animation\ITransition
{
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Duration;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $Delay;
	/**
	 * @var \Avalonia\Animation\Easings\Easing
	 * @property
	 */
	public $Easing;
	/**
	 * @var \Avalonia\AvaloniaProperty
	 * @property
	 */
	public $Property;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\Double|double $progress
	 * @param \Avalonia\Animation\T $from
	 * @param \Avalonia\Animation\T $to
	 * @return \Avalonia\Animation\T
	 */
	protected  function Interpolate($progress, $from, $to){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::get_Property_1 ()
	 * @uses InterpolatingTransitionBase_1MethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::set_Property_1 ($value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::set_Property_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Property(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Apply_1 ($control, $clock, $oldValue, $newValue)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Apply_2 ($control, $clock, $oldValue, $newValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Apply(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::get_Item_1 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::set_Item_1 ($property, $value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::ClearValue_1 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::ClearValue_2 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::ClearValue_3 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::GetValue_1 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::GetValue_2 ($property)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_5 ($property, $source)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_6 ($property, $source)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses InterpolatingTransitionBase_1MethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

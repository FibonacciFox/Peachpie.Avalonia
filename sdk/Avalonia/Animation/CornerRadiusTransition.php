<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CornerRadiusTransitionMethodsOverride
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
 */
class CornerRadiusTransition extends \Avalonia\Animation\Transition_1 implements 
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
	 * @uses CornerRadiusTransitionMethodsOverride::get_Property_1 ()
	 * @uses CornerRadiusTransitionMethodsOverride::get_Property_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Property(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::set_Property_1 ($value)
	 * @uses CornerRadiusTransitionMethodsOverride::set_Property_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Property(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::Apply_1 ($control, $clock, $oldValue, $newValue)
	 * @uses CornerRadiusTransitionMethodsOverride::Apply_2 ($control, $clock, $oldValue, $newValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Apply(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses CornerRadiusTransitionMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses CornerRadiusTransitionMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::get_Item_1 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::set_Item_1 ($property, $value)
	 * @uses CornerRadiusTransitionMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::ClearValue_1 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::ClearValue_2 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::ClearValue_3 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::GetValue_1 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::GetValue_2 ($property)
	 * @uses CornerRadiusTransitionMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses CornerRadiusTransitionMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_5 ($property, $source)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_6 ($property, $source)
	 * @uses CornerRadiusTransitionMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses CornerRadiusTransitionMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses CornerRadiusTransitionMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses CornerRadiusTransitionMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

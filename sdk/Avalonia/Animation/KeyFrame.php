<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyFrameMethodsOverride
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
class KeyFrame extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\Collections\AvaloniaList_1[Avalonia\Animation\IAnimationSetter]
	 * @property
	 */
	public readonly $Setters;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $KeyTime;
	/**
	 * @var \Avalonia\Animation\Cue
	 * @property
	 */
	public $Cue;
	/**
	 * @var \Avalonia\Animation\KeySpline
	 * @property
	 */
	public $KeySpline;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_Setters(){}
	/**
	 * @return \Avalonia\Animation\KeyFrameTimingMode
	 */
	protected  function get_TimingMode(){}
	/**
	 * @param \Avalonia\Animation\KeyFrameTimingMode $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_TimingMode($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_KeyTime(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_KeyTime($value){}
	/**
	 * @return \Avalonia\Animation\Cue
	 */
	public  function get_Cue(){}
	/**
	 * @param \Avalonia\Animation\Cue $value
	 * @return \System\Void|void
	 */
	public  function set_Cue($value){}
	/**
	 * @return \Avalonia\Animation\KeySpline
	 */
	public  function get_KeySpline(){}
	/**
	 * @param \Avalonia\Animation\KeySpline $value
	 * @return \System\Void|void
	 */
	public  function set_KeySpline($value){}
	/**
	 * @uses KeyFrameMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses KeyFrameMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses KeyFrameMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::get_Item_1 ($property)
	 * @uses KeyFrameMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::set_Item_1 ($property, $value)
	 * @uses KeyFrameMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::ClearValue_1 ($property)
	 * @uses KeyFrameMethodsOverride::ClearValue_2 ($property)
	 * @uses KeyFrameMethodsOverride::ClearValue_3 ($property)
	 * @uses KeyFrameMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::GetValue_1 ($property)
	 * @uses KeyFrameMethodsOverride::GetValue_2 ($property)
	 * @uses KeyFrameMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses KeyFrameMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses KeyFrameMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses KeyFrameMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses KeyFrameMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses KeyFrameMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses KeyFrameMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses KeyFrameMethodsOverride::Bind_5 ($property, $source)
	 * @uses KeyFrameMethodsOverride::Bind_6 ($property, $source)
	 * @uses KeyFrameMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses KeyFrameMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses KeyFrameMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyFrameMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses KeyFrameMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyBindingMethodsOverride
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
class KeyBinding extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Windows\Input\ICommand]
	 * @field
	 */
	public readonly $CommandProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 * @field
	 */
	public readonly $CommandParameterProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\KeyGesture]
	 * @field
	 */
	public readonly $GestureProperty;
	/**
	 * @var \System\Windows\Input\ICommand
	 * @property
	 */
	public $Command;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $CommandParameter;
	/**
	 * @var \Avalonia\Input\KeyGesture
	 * @property
	 */
	public $Gesture;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Windows\Input\ICommand
	 */
	public  function get_Command(){}
	/**
	 * @param \System\Windows\Input\ICommand $value
	 * @return \System\Void|void
	 */
	public  function set_Command($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_CommandParameter(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_CommandParameter($value){}
	/**
	 * @return \Avalonia\Input\KeyGesture
	 */
	public  function get_Gesture(){}
	/**
	 * @param \Avalonia\Input\KeyGesture $value
	 * @return \System\Void|void
	 */
	public  function set_Gesture($value){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $args
	 * @return \System\Void|void
	 */
	public  function TryHandle($args){}
	/**
	 * @uses KeyBindingMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses KeyBindingMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses KeyBindingMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::get_Item_1 ($property)
	 * @uses KeyBindingMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::set_Item_1 ($property, $value)
	 * @uses KeyBindingMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::ClearValue_1 ($property)
	 * @uses KeyBindingMethodsOverride::ClearValue_2 ($property)
	 * @uses KeyBindingMethodsOverride::ClearValue_3 ($property)
	 * @uses KeyBindingMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::GetValue_1 ($property)
	 * @uses KeyBindingMethodsOverride::GetValue_2 ($property)
	 * @uses KeyBindingMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses KeyBindingMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses KeyBindingMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses KeyBindingMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses KeyBindingMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses KeyBindingMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses KeyBindingMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses KeyBindingMethodsOverride::Bind_5 ($property, $source)
	 * @uses KeyBindingMethodsOverride::Bind_6 ($property, $source)
	 * @uses KeyBindingMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses KeyBindingMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses KeyBindingMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses KeyBindingMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses KeyBindingMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

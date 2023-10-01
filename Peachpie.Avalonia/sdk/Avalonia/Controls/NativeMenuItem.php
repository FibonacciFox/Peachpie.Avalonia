<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeMenuItemMethodsOverride
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
class NativeMenuItem extends \Avalonia\Controls\NativeMenuItemBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\INativeMenuItemExporterEventsImplBridge
{
	/**
	 * @return \Avalonia\Controls\NativeMenu
	 */
	public  function get_Menu(){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $value
	 * @return \System\Void|void
	 */
	public  function set_Menu($value){}
	/**
	 * @param \Avalonia\AvaloniaObject $sender
	 * @param \Avalonia\Controls\NativeMenu $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CoerceMenu($sender, $value){}
	/**
	 * @return \Avalonia\Media\Imaging\Bitmap
	 */
	public  function get_Icon(){}
	/**
	 * @param \Avalonia\Media\Imaging\Bitmap $value
	 * @return \System\Void|void
	 */
	public  function set_Icon($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Header(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Header($value){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsChecked(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsChecked($value){}
	/**
	 * @return \Avalonia\Controls\NativeMenuItemToggleType
	 */
	public  function get_ToggleType(){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItemToggleType $value
	 * @return \System\Void|void
	 */
	public  function set_ToggleType($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsEnabled($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanExecuteChanged(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasClickHandlers(){}
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Click($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Click($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseClicked(){}
	/**
	 * @uses NativeMenuItemMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses NativeMenuItemMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses NativeMenuItemMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::get_Item_1 ($property)
	 * @uses NativeMenuItemMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::set_Item_1 ($property, $value)
	 * @uses NativeMenuItemMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::ClearValue_1 ($property)
	 * @uses NativeMenuItemMethodsOverride::ClearValue_2 ($property)
	 * @uses NativeMenuItemMethodsOverride::ClearValue_3 ($property)
	 * @uses NativeMenuItemMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::GetValue_1 ($property)
	 * @uses NativeMenuItemMethodsOverride::GetValue_2 ($property)
	 * @uses NativeMenuItemMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses NativeMenuItemMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses NativeMenuItemMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses NativeMenuItemMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses NativeMenuItemMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses NativeMenuItemMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses NativeMenuItemMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses NativeMenuItemMethodsOverride::Bind_5 ($property, $source)
	 * @uses NativeMenuItemMethodsOverride::Bind_6 ($property, $source)
	 * @uses NativeMenuItemMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses NativeMenuItemMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses NativeMenuItemMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses NativeMenuItemMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses NativeMenuItemMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

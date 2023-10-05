<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TrayIconMethodsOverride
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
class TrayIcon extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Platform\INativeMenuExporterProvider,
	\System\IDisposable
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
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\TrayIcons]
	 * @field
	 */
	public readonly $IconsProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\NativeMenu]
	 * @field
	 */
	public readonly $MenuProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\WindowIcon]
	 * @field
	 */
	public readonly $IconProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\String]
	 * @field
	 */
	public readonly $ToolTipTextProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsVisibleProperty;
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
	 * @var \Avalonia\Controls\NativeMenu
	 * @property
	 */
	public $Menu;
	/**
	 * @var \Avalonia\Controls\WindowIcon
	 * @property
	 */
	public $Icon;
	/**
	 * @var \System\String
	 * @property
	 */
	public $ToolTipText;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsVisible;
	/**
	 * @var \Avalonia\Controls\Platform\INativeMenuExporter
	 * @property
	 */
	public readonly $NativeMenuExporter;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Clicked($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Clicked($value){}
	/**
	 * @param \Avalonia\Application $o
	 * @param \Avalonia\Controls\TrayIcons $trayIcons
	 * @return \System\Void|void
	 */
	public static function SetIcons($o, $trayIcons){}
	/**
	 * @param \Avalonia\Application $o
	 * @return \Avalonia\Controls\TrayIcons
	 */
	public static function GetIcons($o){}
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
	 * @return \Avalonia\Controls\NativeMenu
	 */
	public  function get_Menu(){}
	/**
	 * @param \Avalonia\Controls\NativeMenu $value
	 * @return \System\Void|void
	 */
	public  function set_Menu($value){}
	/**
	 * @return \Avalonia\Controls\WindowIcon
	 */
	public  function get_Icon(){}
	/**
	 * @param \Avalonia\Controls\WindowIcon $value
	 * @return \System\Void|void
	 */
	public  function set_Icon($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ToolTipText(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ToolTipText($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVisible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsVisible($value){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeMenuExporter
	 */
	public  function get_NativeMenuExporter(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ApplicationLifetimes\ControlledApplicationLifetimeExitEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Lifetime_Exit($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Icons_CollectionChanged($sender, $e){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $icons
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveIcons($icons){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @uses TrayIconMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TrayIconMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TrayIconMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::get_Item_1 ($property)
	 * @uses TrayIconMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TrayIconMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::ClearValue_1 ($property)
	 * @uses TrayIconMethodsOverride::ClearValue_2 ($property)
	 * @uses TrayIconMethodsOverride::ClearValue_3 ($property)
	 * @uses TrayIconMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::GetValue_1 ($property)
	 * @uses TrayIconMethodsOverride::GetValue_2 ($property)
	 * @uses TrayIconMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TrayIconMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TrayIconMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TrayIconMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TrayIconMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TrayIconMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TrayIconMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TrayIconMethodsOverride::Bind_5 ($property, $source)
	 * @uses TrayIconMethodsOverride::Bind_6 ($property, $source)
	 * @uses TrayIconMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TrayIconMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TrayIconMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TrayIconMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TrayIconMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

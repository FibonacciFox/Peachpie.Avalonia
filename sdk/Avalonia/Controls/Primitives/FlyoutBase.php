<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FlyoutBaseMethodsOverride
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
class FlyoutBase extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\FlyoutBase,System\Boolean]
	 * @field
	 */
	public readonly $IsOpenProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\Primitives\FlyoutBase,Avalonia\Controls\Control]
	 * @field
	 */
	public readonly $TargetProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\Primitives\FlyoutBase]
	 * @field
	 */
	public readonly $AttachedFlyoutProperty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsOpen;
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Opened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Closed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Closed($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsOpen(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsOpen($value){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Target(){}
	/**
	 * @param \Avalonia\Controls\Control $value
	 * @return \System\Void|void
	 */
	protected  function set_Target($value){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \Avalonia\Controls\Primitives\FlyoutBase
	 */
	public static function GetAttachedFlyout($element){}
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @param \Avalonia\Controls\Primitives\FlyoutBase $value
	 * @return \System\Void|void
	 */
	public static function SetAttachedFlyout($element, $value){}
	/**
	 * @param \Avalonia\Controls\Control $flyoutOwner
	 * @return \System\Void|void
	 */
	public static function ShowAttachedFlyout($flyoutOwner){}
	/**
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @return \System\Void|void
	 */
	public  function ShowAt($placementTarget){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnOpened(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnClosed(){}
	/**
	 * @uses FlyoutBaseMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses FlyoutBaseMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses FlyoutBaseMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::get_Item_1 ($property)
	 * @uses FlyoutBaseMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::set_Item_1 ($property, $value)
	 * @uses FlyoutBaseMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::ClearValue_1 ($property)
	 * @uses FlyoutBaseMethodsOverride::ClearValue_2 ($property)
	 * @uses FlyoutBaseMethodsOverride::ClearValue_3 ($property)
	 * @uses FlyoutBaseMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::GetValue_1 ($property)
	 * @uses FlyoutBaseMethodsOverride::GetValue_2 ($property)
	 * @uses FlyoutBaseMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses FlyoutBaseMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses FlyoutBaseMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses FlyoutBaseMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses FlyoutBaseMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses FlyoutBaseMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses FlyoutBaseMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses FlyoutBaseMethodsOverride::Bind_5 ($property, $source)
	 * @uses FlyoutBaseMethodsOverride::Bind_6 ($property, $source)
	 * @uses FlyoutBaseMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses FlyoutBaseMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses FlyoutBaseMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses FlyoutBaseMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses FlyoutBaseMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

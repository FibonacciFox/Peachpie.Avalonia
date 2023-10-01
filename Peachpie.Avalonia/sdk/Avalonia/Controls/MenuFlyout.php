<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MenuFlyoutMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ShowAt_1($placementTarget){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ShowAt_2($placementTarget, $showAtPointer){}
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
class MenuFlyout extends \Avalonia\Controls\Primitives\PopupFlyoutBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{
	/**
	 * @return \Avalonia\Controls\Classes
	 */
	public  function get_FlyoutPresenterClasses(){}
	/**
	 * @return \Avalonia\Controls\ItemCollection
	 */
	public  function get_Items(){}
	/**
	 * @return \System\Collections\IEnumerable
	 */
	public  function get_ItemsSource(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	public  function set_ItemsSource($value){}
	/**
	 * @return \Avalonia\Controls\Templates\IDataTemplate
	 */
	public  function get_ItemTemplate(){}
	/**
	 * @param \Avalonia\Controls\Templates\IDataTemplate $value
	 * @return \System\Void|void
	 */
	public  function set_ItemTemplate($value){}
	/**
	 * @return \Avalonia\Styling\ControlTheme
	 */
	public  function get_ItemContainerTheme(){}
	/**
	 * @param \Avalonia\Styling\ControlTheme $value
	 * @return \System\Void|void
	 */
	public  function set_ItemContainerTheme($value){}
	/**
	 * @return \Avalonia\Styling\ControlTheme
	 */
	public  function get_FlyoutPresenterTheme(){}
	/**
	 * @param \Avalonia\Styling\ControlTheme $value
	 * @return \System\Void|void
	 */
	public  function set_FlyoutPresenterTheme($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PopupHost(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_PopupHostChanged($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_PopupHostChanged($value){}
	/**
	 * @uses MenuFlyoutMethodsOverride::ShowAt_1 ($placementTarget)
	 * @uses MenuFlyoutMethodsOverride::ShowAt_2 ($placementTarget, $showAtPointer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShowAt(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses MenuFlyoutMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses MenuFlyoutMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::get_Item_1 ($property)
	 * @uses MenuFlyoutMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::set_Item_1 ($property, $value)
	 * @uses MenuFlyoutMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::ClearValue_1 ($property)
	 * @uses MenuFlyoutMethodsOverride::ClearValue_2 ($property)
	 * @uses MenuFlyoutMethodsOverride::ClearValue_3 ($property)
	 * @uses MenuFlyoutMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::GetValue_1 ($property)
	 * @uses MenuFlyoutMethodsOverride::GetValue_2 ($property)
	 * @uses MenuFlyoutMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses MenuFlyoutMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses MenuFlyoutMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses MenuFlyoutMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses MenuFlyoutMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses MenuFlyoutMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses MenuFlyoutMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses MenuFlyoutMethodsOverride::Bind_5 ($property, $source)
	 * @uses MenuFlyoutMethodsOverride::Bind_6 ($property, $source)
	 * @uses MenuFlyoutMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses MenuFlyoutMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses MenuFlyoutMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses MenuFlyoutMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses MenuFlyoutMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

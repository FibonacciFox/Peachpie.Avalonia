<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SplitViewTemplateSettingsMethodsOverride
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
class SplitViewTemplateSettings extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $ClosedPaneWidthProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\GridLength]
	 * @field
	 */
	public readonly $PaneColumnGridLengthProperty;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $ClosedPaneWidth;
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @property
	 */
	public $PaneColumnGridLength;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Double|double
	 */
	public  function get_ClosedPaneWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected  function set_ClosedPaneWidth($value){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	public  function get_PaneColumnGridLength(){}
	/**
	 * @param \Avalonia\Controls\GridLength $value
	 * @return \System\Void|void
	 */
	protected  function set_PaneColumnGridLength($value){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses SplitViewTemplateSettingsMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses SplitViewTemplateSettingsMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::get_Item_1 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::set_Item_1 ($property, $value)
	 * @uses SplitViewTemplateSettingsMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::ClearValue_1 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::ClearValue_2 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::ClearValue_3 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::GetValue_1 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::GetValue_2 ($property)
	 * @uses SplitViewTemplateSettingsMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_5 ($property, $source)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_6 ($property, $source)
	 * @uses SplitViewTemplateSettingsMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses SplitViewTemplateSettingsMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses SplitViewTemplateSettingsMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

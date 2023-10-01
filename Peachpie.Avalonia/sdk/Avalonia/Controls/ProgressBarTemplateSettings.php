<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ProgressBarTemplateSettingsMethodsOverride
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
class ProgressBarTemplateSettings extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_ContainerWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ContainerWidth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Container2Width(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Container2Width($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ContainerAnimationStartPosition(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ContainerAnimationStartPosition($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ContainerAnimationEndPosition(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ContainerAnimationEndPosition($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Container2AnimationStartPosition(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Container2AnimationStartPosition($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Container2AnimationEndPosition(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Container2AnimationEndPosition($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_IndeterminateStartingOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_IndeterminateStartingOffset($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_IndeterminateEndingOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_IndeterminateEndingOffset($value){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::get_Item_1 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::ClearValue_1 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::ClearValue_2 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::ClearValue_3 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::GetValue_1 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::GetValue_2 ($property)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_5 ($property, $source)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_6 ($property, $source)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ProgressBarTemplateSettingsMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

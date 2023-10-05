<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ColumnDefinitionMethodsOverride
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
class ColumnDefinition extends \Avalonia\Controls\DefinitionBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $MaxWidthProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $MinWidthProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\GridLength]
	 * @field
	 */
	public readonly $WidthProperty;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_parentIndex;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ActualWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaxWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MinWidth;
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @property
	 */
	public $Width;
	/**
	 * @var \System\String
	 * @property
	 */
	public $SharedSizeGroup;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Double|double
	 */
	public  function get_ActualWidth(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxWidth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MinWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MinWidth($value){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	public  function get_Width(){}
	/**
	 * @param \Avalonia\Controls\GridLength $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ColumnDefinitionMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ColumnDefinitionMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::get_Item_1 ($property)
	 * @uses ColumnDefinitionMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ColumnDefinitionMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::ClearValue_1 ($property)
	 * @uses ColumnDefinitionMethodsOverride::ClearValue_2 ($property)
	 * @uses ColumnDefinitionMethodsOverride::ClearValue_3 ($property)
	 * @uses ColumnDefinitionMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::GetValue_1 ($property)
	 * @uses ColumnDefinitionMethodsOverride::GetValue_2 ($property)
	 * @uses ColumnDefinitionMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ColumnDefinitionMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ColumnDefinitionMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ColumnDefinitionMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ColumnDefinitionMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ColumnDefinitionMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ColumnDefinitionMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ColumnDefinitionMethodsOverride::Bind_5 ($property, $source)
	 * @uses ColumnDefinitionMethodsOverride::Bind_6 ($property, $source)
	 * @uses ColumnDefinitionMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ColumnDefinitionMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ColumnDefinitionMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CombinedGeometryMethodsOverride
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
class CombinedGeometry extends \Avalonia\Media\Geometry implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 * @field
	 */
	public readonly $Geometry1Property;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 * @field
	 */
	public readonly $Geometry2Property;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GeometryCombineMode]
	 * @field
	 */
	public readonly $GeometryCombineModeProperty;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $Geometry1;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $Geometry2;
	/**
	 * @var \Avalonia\Media\GeometryCombineMode
	 * @property
	 */
	public $GeometryCombineMode;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \Avalonia\Media\Transform
	 * @property
	 */
	public $Transform;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ContourLength;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function get_Geometry1(){}
	/**
	 * @param \Avalonia\Media\Geometry $value
	 * @return \System\Void|void
	 */
	public  function set_Geometry1($value){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function get_Geometry2(){}
	/**
	 * @param \Avalonia\Media\Geometry $value
	 * @return \System\Void|void
	 */
	public  function set_Geometry2($value){}
	/**
	 * @return \Avalonia\Media\GeometryCombineMode
	 */
	public  function get_GeometryCombineMode(){}
	/**
	 * @param \Avalonia\Media\GeometryCombineMode $value
	 * @return \System\Void|void
	 */
	public  function set_GeometryCombineMode($value){}
	/**
	 * @uses CombinedGeometryMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses CombinedGeometryMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses CombinedGeometryMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::get_Item_1 ($property)
	 * @uses CombinedGeometryMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::set_Item_1 ($property, $value)
	 * @uses CombinedGeometryMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::ClearValue_1 ($property)
	 * @uses CombinedGeometryMethodsOverride::ClearValue_2 ($property)
	 * @uses CombinedGeometryMethodsOverride::ClearValue_3 ($property)
	 * @uses CombinedGeometryMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::GetValue_1 ($property)
	 * @uses CombinedGeometryMethodsOverride::GetValue_2 ($property)
	 * @uses CombinedGeometryMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses CombinedGeometryMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses CombinedGeometryMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses CombinedGeometryMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses CombinedGeometryMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses CombinedGeometryMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses CombinedGeometryMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses CombinedGeometryMethodsOverride::Bind_5 ($property, $source)
	 * @uses CombinedGeometryMethodsOverride::Bind_6 ($property, $source)
	 * @uses CombinedGeometryMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses CombinedGeometryMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses CombinedGeometryMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses CombinedGeometryMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses CombinedGeometryMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

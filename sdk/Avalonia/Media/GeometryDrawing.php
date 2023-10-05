<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GeometryDrawingMethodsOverride
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
class GeometryDrawing extends \Avalonia\Media\Drawing implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 * @field
	 */
	public readonly $GeometryProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 * @field
	 */
	public readonly $BrushProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IPen]
	 * @field
	 */
	public readonly $PenProperty;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $Geometry;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Brush;
	/**
	 * @var \Avalonia\Media\IPen
	 * @property
	 */
	public $Pen;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function get_Geometry(){}
	/**
	 * @param \Avalonia\Media\Geometry $value
	 * @return \System\Void|void
	 */
	public  function set_Geometry($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Brush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_Brush($value){}
	/**
	 * @return \Avalonia\Media\IPen
	 */
	public  function get_Pen(){}
	/**
	 * @param \Avalonia\Media\IPen $value
	 * @return \System\Void|void
	 */
	public  function set_Pen($value){}
	/**
	 * @uses GeometryDrawingMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses GeometryDrawingMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses GeometryDrawingMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::get_Item_1 ($property)
	 * @uses GeometryDrawingMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::set_Item_1 ($property, $value)
	 * @uses GeometryDrawingMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::ClearValue_1 ($property)
	 * @uses GeometryDrawingMethodsOverride::ClearValue_2 ($property)
	 * @uses GeometryDrawingMethodsOverride::ClearValue_3 ($property)
	 * @uses GeometryDrawingMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::GetValue_1 ($property)
	 * @uses GeometryDrawingMethodsOverride::GetValue_2 ($property)
	 * @uses GeometryDrawingMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses GeometryDrawingMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses GeometryDrawingMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses GeometryDrawingMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses GeometryDrawingMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses GeometryDrawingMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses GeometryDrawingMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses GeometryDrawingMethodsOverride::Bind_5 ($property, $source)
	 * @uses GeometryDrawingMethodsOverride::Bind_6 ($property, $source)
	 * @uses GeometryDrawingMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GeometryDrawingMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses GeometryDrawingMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryDrawingMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses GeometryDrawingMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

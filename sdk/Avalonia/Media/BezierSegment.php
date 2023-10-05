<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BezierSegmentMethodsOverride
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
class BezierSegment extends \Avalonia\Media\PathSegment implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 * @field
	 */
	public readonly $Point1Property;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 * @field
	 */
	public readonly $Point2Property;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 * @field
	 */
	public readonly $Point3Property;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $Point1;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $Point2;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $Point3;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Point1(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Point1($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Point2(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Point2($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Point3(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Point3($value){}
	/**
	 * @uses BezierSegmentMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses BezierSegmentMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses BezierSegmentMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::get_Item_1 ($property)
	 * @uses BezierSegmentMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::set_Item_1 ($property, $value)
	 * @uses BezierSegmentMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::ClearValue_1 ($property)
	 * @uses BezierSegmentMethodsOverride::ClearValue_2 ($property)
	 * @uses BezierSegmentMethodsOverride::ClearValue_3 ($property)
	 * @uses BezierSegmentMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::GetValue_1 ($property)
	 * @uses BezierSegmentMethodsOverride::GetValue_2 ($property)
	 * @uses BezierSegmentMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses BezierSegmentMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses BezierSegmentMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses BezierSegmentMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses BezierSegmentMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses BezierSegmentMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses BezierSegmentMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses BezierSegmentMethodsOverride::Bind_5 ($property, $source)
	 * @uses BezierSegmentMethodsOverride::Bind_6 ($property, $source)
	 * @uses BezierSegmentMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses BezierSegmentMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses BezierSegmentMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses BezierSegmentMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses BezierSegmentMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

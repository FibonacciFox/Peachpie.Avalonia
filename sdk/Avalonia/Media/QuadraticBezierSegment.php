<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait QuadraticBezierSegmentMethodsOverride
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
class QuadraticBezierSegment extends \Avalonia\Media\PathSegment implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
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
	 * @uses QuadraticBezierSegmentMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses QuadraticBezierSegmentMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses QuadraticBezierSegmentMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::get_Item_1 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::set_Item_1 ($property, $value)
	 * @uses QuadraticBezierSegmentMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::ClearValue_1 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::ClearValue_2 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::ClearValue_3 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::GetValue_1 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::GetValue_2 ($property)
	 * @uses QuadraticBezierSegmentMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses QuadraticBezierSegmentMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_5 ($property, $source)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_6 ($property, $source)
	 * @uses QuadraticBezierSegmentMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses QuadraticBezierSegmentMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses QuadraticBezierSegmentMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses QuadraticBezierSegmentMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

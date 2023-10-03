<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeySplineMethodsOverride
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
class KeySpline extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\KeySpline
	 */
	public static function Parse($value, $culture){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ControlPointX1(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPointX1($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ControlPointY1(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPointY1($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ControlPointX2(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPointX2($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ControlPointY2(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ControlPointY2($value){}
	/**
	 * @param \System\Double|double $linearProgress
	 * @return \System\Double|double
	 */
	public  function GetSplineProgress($linearProgress){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsValid(){}
	/**
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidXValue($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Build(){}
	/**
	 * @param \System\Double|double $b
	 * @param \System\Double|double $c
	 * @param \System\Double|double $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBezierValue($b, $c, $t){}
	/**
	 * @param \System\Double|double $t
	 * @param \System\Double& $x
	 * @param \System\Double& $dx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetXAndDx($t, $x, $dx){}
	/**
	 * @param \System\Double|double $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetParameterFromX($time){}
	/**
	 * @uses KeySplineMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses KeySplineMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses KeySplineMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::get_Item_1 ($property)
	 * @uses KeySplineMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::set_Item_1 ($property, $value)
	 * @uses KeySplineMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::ClearValue_1 ($property)
	 * @uses KeySplineMethodsOverride::ClearValue_2 ($property)
	 * @uses KeySplineMethodsOverride::ClearValue_3 ($property)
	 * @uses KeySplineMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::GetValue_1 ($property)
	 * @uses KeySplineMethodsOverride::GetValue_2 ($property)
	 * @uses KeySplineMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses KeySplineMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses KeySplineMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses KeySplineMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses KeySplineMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses KeySplineMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses KeySplineMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses KeySplineMethodsOverride::Bind_5 ($property, $source)
	 * @uses KeySplineMethodsOverride::Bind_6 ($property, $source)
	 * @uses KeySplineMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses KeySplineMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses KeySplineMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses KeySplineMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses KeySplineMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

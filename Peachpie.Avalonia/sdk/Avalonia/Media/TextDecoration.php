<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextDecorationMethodsOverride
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
class TextDecoration extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \Avalonia\Media\TextDecorationLocation
	 */
	public  function get_Location(){}
	/**
	 * @param \Avalonia\Media\TextDecorationLocation $value
	 * @return \System\Void|void
	 */
	public  function set_Location($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Stroke(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_Stroke($value){}
	/**
	 * @return \Avalonia\Media\TextDecorationUnit
	 */
	public  function get_StrokeThicknessUnit(){}
	/**
	 * @param \Avalonia\Media\TextDecorationUnit $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeThicknessUnit($value){}
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	public  function get_StrokeDashArray(){}
	/**
	 * @param \Avalonia\Collections\AvaloniaList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeDashArray($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StrokeDashOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeDashOffset($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StrokeThickness(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeThickness($value){}
	/**
	 * @return \Avalonia\Media\PenLineCap
	 */
	public  function get_StrokeLineCap(){}
	/**
	 * @param \Avalonia\Media\PenLineCap $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeLineCap($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_StrokeOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeOffset($value){}
	/**
	 * @return \Avalonia\Media\TextDecorationUnit
	 */
	public  function get_StrokeOffsetUnit(){}
	/**
	 * @param \Avalonia\Media\TextDecorationUnit $value
	 * @return \System\Void|void
	 */
	public  function set_StrokeOffsetUnit($value){}
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $textMetrics
	 * @param \Avalonia\Media\IBrush $defaultBrush
	 * @return \System\Void|void
	 */
	protected  function Draw($drawingContext, $glyphRun, $textMetrics, $defaultBrush){}
	/**
	 * @uses TextDecorationMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses TextDecorationMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses TextDecorationMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::get_Item_1 ($property)
	 * @uses TextDecorationMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::set_Item_1 ($property, $value)
	 * @uses TextDecorationMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::ClearValue_1 ($property)
	 * @uses TextDecorationMethodsOverride::ClearValue_2 ($property)
	 * @uses TextDecorationMethodsOverride::ClearValue_3 ($property)
	 * @uses TextDecorationMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::GetValue_1 ($property)
	 * @uses TextDecorationMethodsOverride::GetValue_2 ($property)
	 * @uses TextDecorationMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses TextDecorationMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses TextDecorationMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses TextDecorationMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses TextDecorationMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses TextDecorationMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses TextDecorationMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses TextDecorationMethodsOverride::Bind_5 ($property, $source)
	 * @uses TextDecorationMethodsOverride::Bind_6 ($property, $source)
	 * @uses TextDecorationMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses TextDecorationMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses TextDecorationMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses TextDecorationMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses TextDecorationMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

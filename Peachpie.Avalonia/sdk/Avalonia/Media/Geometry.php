<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GeometryMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function TransformChanged_1($e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function TransformChanged_2($sender, $e){}
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
class Geometry extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Changed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Changed($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	protected  function get_PlatformImpl(){}
	/**
	 * @return \Avalonia\Media\Transform
	 */
	public  function get_Transform(){}
	/**
	 * @param \Avalonia\Media\Transform $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Geometry
	 */
	public static function Parse($s){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function Clone(){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @return \Avalonia\Rect
	 */
	public  function GetRenderBounds($pen){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	public  function FillContains($point){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	public  function StrokeContains($pen, $point){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsGeometry($properties){}
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	protected  function CreateDefiningGeometry(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateGeometry(){}
	/**
	 * @uses GeometryMethodsOverride::TransformChanged_1 ($e)
	 * @uses GeometryMethodsOverride::TransformChanged_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TransformChanged(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AffectsGeometryInvalidate($e){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ContourLength(){}
	/**
	 * @param \Avalonia\Media\Geometry $geometry1
	 * @param \Avalonia\Media\RectangleGeometry $geometry2
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Media\Transform $transform
	 * @return \Avalonia\Media\Geometry
	 */
	public static function Combine($geometry1, $geometry2, $combineMode, $transform){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 * @return \System\Boolean
	 */
	public  function TryGetPointAtDistance($distance, $point){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& $point
	 * @param \Avalonia\Point& $tangent
	 * @return \System\Boolean
	 */
	public  function TryGetPointAndTangentAtDistance($distance, $point, $tangent){}
	/**
	 * @param \System\Double|double $startDistance
	 * @param \System\Double|double $stopDistance
	 * @param \System\Boolean $startOnBeginFigure
	 * @param \Avalonia\Media\Geometry& $segmentGeometry
	 * @return \System\Boolean
	 */
	public  function TryGetSegment($startDistance, $stopDistance, $startOnBeginFigure, $segmentGeometry){}
	/**
	 * @uses GeometryMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses GeometryMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses GeometryMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::get_Item_1 ($property)
	 * @uses GeometryMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::set_Item_1 ($property, $value)
	 * @uses GeometryMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::ClearValue_1 ($property)
	 * @uses GeometryMethodsOverride::ClearValue_2 ($property)
	 * @uses GeometryMethodsOverride::ClearValue_3 ($property)
	 * @uses GeometryMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::GetValue_1 ($property)
	 * @uses GeometryMethodsOverride::GetValue_2 ($property)
	 * @uses GeometryMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses GeometryMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses GeometryMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses GeometryMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses GeometryMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses GeometryMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses GeometryMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses GeometryMethodsOverride::Bind_5 ($property, $source)
	 * @uses GeometryMethodsOverride::Bind_6 ($property, $source)
	 * @uses GeometryMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GeometryMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses GeometryMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses GeometryMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

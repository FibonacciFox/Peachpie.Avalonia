<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PathGeometryMethodsOverride
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
class PathGeometry extends \Avalonia\Media\StreamGeometry implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\PathGeometry,Avalonia\Media\PathFigures]
	 * @field
	 */
	public readonly $FiguresProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FillRule]
	 * @field
	 */
	public readonly $FillRuleProperty;
	/**
	 * @var \Avalonia\Media\PathFigures
	 * @property
	 */
	public $Figures;
	/**
	 * @var \Avalonia\Media\FillRule
	 * @property
	 */
	public $FillRule;
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
	 * @param \System\String|string $pathData
	 * @return \Avalonia\Media\PathGeometry
	 */
	public static function Parse($pathData){}
	/**
	 * @return \Avalonia\Media\PathFigures
	 */
	public  function get_Figures(){}
	/**
	 * @param \Avalonia\Media\PathFigures $value
	 * @return \System\Void|void
	 */
	public  function set_Figures($value){}
	/**
	 * @return \Avalonia\Media\FillRule
	 */
	public  function get_FillRule(){}
	/**
	 * @param \Avalonia\Media\FillRule $value
	 * @return \System\Void|void
	 */
	public  function set_FillRule($value){}
	/**
	 * @param \Avalonia\Media\PathFigures $figures
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnFiguresChanged($figures){}
	/**
	 * @param \System\Object|object $_
	 * @param \System\EventArgs $__
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvalidateGeometryFromSegments($_, $__){}
	/**
	 * @uses PathGeometryMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses PathGeometryMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses PathGeometryMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::get_Item_1 ($property)
	 * @uses PathGeometryMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::set_Item_1 ($property, $value)
	 * @uses PathGeometryMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::ClearValue_1 ($property)
	 * @uses PathGeometryMethodsOverride::ClearValue_2 ($property)
	 * @uses PathGeometryMethodsOverride::ClearValue_3 ($property)
	 * @uses PathGeometryMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::GetValue_1 ($property)
	 * @uses PathGeometryMethodsOverride::GetValue_2 ($property)
	 * @uses PathGeometryMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses PathGeometryMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses PathGeometryMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses PathGeometryMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses PathGeometryMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses PathGeometryMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses PathGeometryMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses PathGeometryMethodsOverride::Bind_5 ($property, $source)
	 * @uses PathGeometryMethodsOverride::Bind_6 ($property, $source)
	 * @uses PathGeometryMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PathGeometryMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses PathGeometryMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses PathGeometryMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses PathGeometryMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

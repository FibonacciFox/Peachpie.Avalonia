<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PenMethodsOverride
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
class Pen extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IPen,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 * @field
	 */
	public readonly $BrushProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $ThicknessProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IDashStyle]
	 * @field
	 */
	public readonly $DashStyleProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\PenLineCap]
	 * @field
	 */
	public readonly $LineCapProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\PenLineJoin]
	 * @field
	 */
	public readonly $LineJoinProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $MiterLimitProperty;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $Brush;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Thickness;
	/**
	 * @var \Avalonia\Media\IDashStyle
	 * @property
	 */
	public $DashStyle;
	/**
	 * @var \Avalonia\Media\PenLineCap
	 * @property
	 */
	public $LineCap;
	/**
	 * @var \Avalonia\Media\PenLineJoin
	 * @property
	 */
	public $LineJoin;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MiterLimit;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
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
	 * @return \System\Double|double
	 */
	public  function get_Thickness(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Thickness($value){}
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public  function get_DashStyle(){}
	/**
	 * @param \Avalonia\Media\IDashStyle $value
	 * @return \System\Void|void
	 */
	public  function set_DashStyle($value){}
	/**
	 * @return \Avalonia\Media\PenLineCap
	 */
	public  function get_LineCap(){}
	/**
	 * @param \Avalonia\Media\PenLineCap $value
	 * @return \System\Void|void
	 */
	public  function set_LineCap($value){}
	/**
	 * @return \Avalonia\Media\PenLineJoin
	 */
	public  function get_LineJoin(){}
	/**
	 * @param \Avalonia\Media\PenLineJoin $value
	 * @return \System\Void|void
	 */
	public  function set_LineJoin($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MiterLimit(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MiterLimit($value){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutablePen
	 */
	public  function ToImmutable(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RegisterForSerialization(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateDashStyleSubscription(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetForCompositor($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddRefOnCompositor($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseOnCompositor($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
	/**
	 * @uses PenMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses PenMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses PenMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::get_Item_1 ($property)
	 * @uses PenMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::set_Item_1 ($property, $value)
	 * @uses PenMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::ClearValue_1 ($property)
	 * @uses PenMethodsOverride::ClearValue_2 ($property)
	 * @uses PenMethodsOverride::ClearValue_3 ($property)
	 * @uses PenMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::GetValue_1 ($property)
	 * @uses PenMethodsOverride::GetValue_2 ($property)
	 * @uses PenMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses PenMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses PenMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses PenMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses PenMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses PenMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses PenMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses PenMethodsOverride::Bind_5 ($property, $source)
	 * @uses PenMethodsOverride::Bind_6 ($property, $source)
	 * @uses PenMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PenMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses PenMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses PenMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses PenMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

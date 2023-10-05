<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RadialGradientBrushMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SerializeChanges_1($c, $writer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SerializeChanges_2($c, $writer){}
	/**
	 * @return \Avalonia\Media\GradientStops
	 */
	#[MethodOverride] public  function get_GradientStops_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] private  function get_GradientStops_2(){}
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
class RadialGradientBrush extends \Avalonia\Media\GradientBrush implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 * @field
	 */
	public readonly $CenterProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 * @field
	 */
	public readonly $GradientOriginProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $RadiusProperty;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $Center;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $GradientOrigin;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Radius;
	/**
	 * @var \Avalonia\Media\GradientSpreadMethod
	 * @property
	 */
	public $SpreadMethod;
	/**
	 * @var \Avalonia\Media\GradientStops
	 * @property
	 */
	public $GradientStops;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Media\ITransform
	 * @property
	 */
	public $Transform;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $TransformOrigin;
	/**
	 * @var \Avalonia\Animation\Transitions
	 * @property
	 */
	public $Transitions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_Center(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_Center($value){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_GradientOrigin(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_GradientOrigin($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Radius(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Radius($value){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::SerializeChanges_1 ($c, $writer)
	 * @uses RadialGradientBrushMethodsOverride::SerializeChanges_2 ($c, $writer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SerializeChanges(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::get_GradientStops_1 ()
	 * @uses RadialGradientBrushMethodsOverride::get_GradientStops_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_GradientStops(mixed ...$args){}
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
	 * @uses RadialGradientBrushMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses RadialGradientBrushMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses RadialGradientBrushMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::get_Item_1 ($property)
	 * @uses RadialGradientBrushMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::set_Item_1 ($property, $value)
	 * @uses RadialGradientBrushMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::ClearValue_1 ($property)
	 * @uses RadialGradientBrushMethodsOverride::ClearValue_2 ($property)
	 * @uses RadialGradientBrushMethodsOverride::ClearValue_3 ($property)
	 * @uses RadialGradientBrushMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::GetValue_1 ($property)
	 * @uses RadialGradientBrushMethodsOverride::GetValue_2 ($property)
	 * @uses RadialGradientBrushMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses RadialGradientBrushMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses RadialGradientBrushMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses RadialGradientBrushMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses RadialGradientBrushMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses RadialGradientBrushMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses RadialGradientBrushMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses RadialGradientBrushMethodsOverride::Bind_5 ($property, $source)
	 * @uses RadialGradientBrushMethodsOverride::Bind_6 ($property, $source)
	 * @uses RadialGradientBrushMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses RadialGradientBrushMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses RadialGradientBrushMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses RadialGradientBrushMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

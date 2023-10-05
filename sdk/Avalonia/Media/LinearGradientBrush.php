<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LinearGradientBrushMethodsOverride
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
class LinearGradientBrush extends \Avalonia\Media\GradientBrush implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush,
	\Avalonia\Media\ILinearGradientBrush
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 * @field
	 */
	public readonly $StartPointProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 * @field
	 */
	public readonly $EndPointProperty;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $StartPoint;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $EndPoint;
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
	public  function get_StartPoint(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_StartPoint($value){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_EndPoint(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_EndPoint($value){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SerializeChanges_1 ($c, $writer)
	 * @uses LinearGradientBrushMethodsOverride::SerializeChanges_2 ($c, $writer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SerializeChanges(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::get_GradientStops_1 ()
	 * @uses LinearGradientBrushMethodsOverride::get_GradientStops_2 ()
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
	 * @uses LinearGradientBrushMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses LinearGradientBrushMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses LinearGradientBrushMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::get_Item_1 ($property)
	 * @uses LinearGradientBrushMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::set_Item_1 ($property, $value)
	 * @uses LinearGradientBrushMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::ClearValue_1 ($property)
	 * @uses LinearGradientBrushMethodsOverride::ClearValue_2 ($property)
	 * @uses LinearGradientBrushMethodsOverride::ClearValue_3 ($property)
	 * @uses LinearGradientBrushMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::GetValue_1 ($property)
	 * @uses LinearGradientBrushMethodsOverride::GetValue_2 ($property)
	 * @uses LinearGradientBrushMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses LinearGradientBrushMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses LinearGradientBrushMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses LinearGradientBrushMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses LinearGradientBrushMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses LinearGradientBrushMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses LinearGradientBrushMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses LinearGradientBrushMethodsOverride::Bind_5 ($property, $source)
	 * @uses LinearGradientBrushMethodsOverride::Bind_6 ($property, $source)
	 * @uses LinearGradientBrushMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses LinearGradientBrushMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses LinearGradientBrushMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses LinearGradientBrushMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

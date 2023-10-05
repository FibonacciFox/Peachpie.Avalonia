<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GradientBrushMethodsOverride
{
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
	#[MethodOverride] protected  function SerializeChanges_1($c, $writer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SerializeChanges_2($c, $writer){}
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
class GradientBrush extends \Avalonia\Media\Brush implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IMutableBrush
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GradientSpreadMethod]
	 * @field
	 */
	public readonly $SpreadMethodProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GradientStops]
	 * @field
	 */
	public readonly $GradientStopsProperty;
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
	 * @return \Avalonia\Media\GradientSpreadMethod
	 */
	public  function get_SpreadMethod(){}
	/**
	 * @param \Avalonia\Media\GradientSpreadMethod $value
	 * @return \System\Void|void
	 */
	public  function set_SpreadMethod($value){}
	/**
	 * @uses GradientBrushMethodsOverride::get_GradientStops_1 ()
	 * @uses GradientBrushMethodsOverride::get_GradientStops_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_GradientStops(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\GradientStops $value
	 * @return \System\Void|void
	 */
	public  function set_GradientStops($value){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GradientStopsChanged($sender, $e){}
	/**
	 * @param \System\Tuple_2 $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GradientStopChanged($e){}
	/**
	 * @uses GradientBrushMethodsOverride::SerializeChanges_1 ($c, $writer)
	 * @uses GradientBrushMethodsOverride::SerializeChanges_2 ($c, $writer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SerializeChanges(mixed ...$args){}
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	public  function ToImmutable(){}
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
	 * @uses GradientBrushMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses GradientBrushMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses GradientBrushMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::get_Item_1 ($property)
	 * @uses GradientBrushMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::set_Item_1 ($property, $value)
	 * @uses GradientBrushMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::ClearValue_1 ($property)
	 * @uses GradientBrushMethodsOverride::ClearValue_2 ($property)
	 * @uses GradientBrushMethodsOverride::ClearValue_3 ($property)
	 * @uses GradientBrushMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::GetValue_1 ($property)
	 * @uses GradientBrushMethodsOverride::GetValue_2 ($property)
	 * @uses GradientBrushMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses GradientBrushMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses GradientBrushMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses GradientBrushMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses GradientBrushMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses GradientBrushMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses GradientBrushMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses GradientBrushMethodsOverride::Bind_5 ($property, $source)
	 * @uses GradientBrushMethodsOverride::Bind_6 ($property, $source)
	 * @uses GradientBrushMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GradientBrushMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses GradientBrushMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses GradientBrushMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses GradientBrushMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

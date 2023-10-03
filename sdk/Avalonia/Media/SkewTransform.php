<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SkewTransformMethodsOverride
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
class SkewTransform extends \Avalonia\Media\Transform implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_AngleX(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_AngleX($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_AngleY(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_AngleY($value){}
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
	#[MethodPrivate]  function TryGetServer($c){}
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
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
	/**
	 * @uses SkewTransformMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses SkewTransformMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses SkewTransformMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::get_Item_1 ($property)
	 * @uses SkewTransformMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::set_Item_1 ($property, $value)
	 * @uses SkewTransformMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::ClearValue_1 ($property)
	 * @uses SkewTransformMethodsOverride::ClearValue_2 ($property)
	 * @uses SkewTransformMethodsOverride::ClearValue_3 ($property)
	 * @uses SkewTransformMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::GetValue_1 ($property)
	 * @uses SkewTransformMethodsOverride::GetValue_2 ($property)
	 * @uses SkewTransformMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses SkewTransformMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses SkewTransformMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses SkewTransformMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses SkewTransformMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses SkewTransformMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses SkewTransformMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses SkewTransformMethodsOverride::Bind_5 ($property, $source)
	 * @uses SkewTransformMethodsOverride::Bind_6 ($property, $source)
	 * @uses SkewTransformMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses SkewTransformMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses SkewTransformMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses SkewTransformMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses SkewTransformMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

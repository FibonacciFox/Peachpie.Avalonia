<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VisualBrushMethodsOverride
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
class VisualBrush extends \Avalonia\Media\TileBrush implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\ISceneBrush
{
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_Visual(){}
	/**
	 * @param \Avalonia\Visual $value
	 * @return \System\Void|void
	 */
	public  function set_Visual($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateContent(){}
	/**
	 * @uses VisualBrushMethodsOverride::SerializeChanges_1 ($c, $writer)
	 * @uses VisualBrushMethodsOverride::SerializeChanges_2 ($c, $writer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SerializeChanges(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateServerContent($c){}
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
	 * @uses VisualBrushMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses VisualBrushMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses VisualBrushMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::get_Item_1 ($property)
	 * @uses VisualBrushMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::set_Item_1 ($property, $value)
	 * @uses VisualBrushMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::ClearValue_1 ($property)
	 * @uses VisualBrushMethodsOverride::ClearValue_2 ($property)
	 * @uses VisualBrushMethodsOverride::ClearValue_3 ($property)
	 * @uses VisualBrushMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::GetValue_1 ($property)
	 * @uses VisualBrushMethodsOverride::GetValue_2 ($property)
	 * @uses VisualBrushMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses VisualBrushMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses VisualBrushMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses VisualBrushMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses VisualBrushMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses VisualBrushMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses VisualBrushMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses VisualBrushMethodsOverride::Bind_5 ($property, $source)
	 * @uses VisualBrushMethodsOverride::Bind_6 ($property, $source)
	 * @uses VisualBrushMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses VisualBrushMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses VisualBrushMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualBrushMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses VisualBrushMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

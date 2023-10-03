<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DrawingImageMethodsOverride
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
class DrawingImage extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IImage,
	\Avalonia\Media\IAffectsRender
{
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Invalidated($value){}
	/**
	 * @return \Avalonia\Media\Drawing
	 */
	public  function get_Drawing(){}
	/**
	 * @param \Avalonia\Media\Drawing $value
	 * @return \System\Void|void
	 */
	public  function set_Drawing($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Draw($context, $sourceRect, $destRect){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RaiseInvalidated($e){}
	/**
	 * @uses DrawingImageMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses DrawingImageMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses DrawingImageMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::get_Item_1 ($property)
	 * @uses DrawingImageMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::set_Item_1 ($property, $value)
	 * @uses DrawingImageMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::ClearValue_1 ($property)
	 * @uses DrawingImageMethodsOverride::ClearValue_2 ($property)
	 * @uses DrawingImageMethodsOverride::ClearValue_3 ($property)
	 * @uses DrawingImageMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::GetValue_1 ($property)
	 * @uses DrawingImageMethodsOverride::GetValue_2 ($property)
	 * @uses DrawingImageMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses DrawingImageMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses DrawingImageMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses DrawingImageMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses DrawingImageMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses DrawingImageMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses DrawingImageMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses DrawingImageMethodsOverride::Bind_5 ($property, $source)
	 * @uses DrawingImageMethodsOverride::Bind_6 ($property, $source)
	 * @uses DrawingImageMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DrawingImageMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses DrawingImageMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingImageMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses DrawingImageMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

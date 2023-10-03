<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GeometryGroupMethodsOverride
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
class GeometryGroup extends \Avalonia\Media\Geometry implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \Avalonia\Media\GeometryCollection
	 */
	public  function get_Children(){}
	/**
	 * @param \Avalonia\Media\GeometryCollection $value
	 * @return \System\Void|void
	 */
	public  function set_Children($value){}
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
	 * @param \Avalonia\Media\GeometryCollection $oldChildren
	 * @param \Avalonia\Media\GeometryCollection $newChildren
	 * @return \System\Void|void
	 */
	protected  function OnChildrenChanged($oldChildren, $newChildren){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @uses GeometryGroupMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses GeometryGroupMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses GeometryGroupMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::get_Item_1 ($property)
	 * @uses GeometryGroupMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::set_Item_1 ($property, $value)
	 * @uses GeometryGroupMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::ClearValue_1 ($property)
	 * @uses GeometryGroupMethodsOverride::ClearValue_2 ($property)
	 * @uses GeometryGroupMethodsOverride::ClearValue_3 ($property)
	 * @uses GeometryGroupMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::GetValue_1 ($property)
	 * @uses GeometryGroupMethodsOverride::GetValue_2 ($property)
	 * @uses GeometryGroupMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses GeometryGroupMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses GeometryGroupMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses GeometryGroupMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses GeometryGroupMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses GeometryGroupMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses GeometryGroupMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses GeometryGroupMethodsOverride::Bind_5 ($property, $source)
	 * @uses GeometryGroupMethodsOverride::Bind_6 ($property, $source)
	 * @uses GeometryGroupMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses GeometryGroupMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses GeometryGroupMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses GeometryGroupMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses GeometryGroupMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DashStyleMethodsOverride
{
	/**
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	#[MethodOverride] public  function get_Dashes_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Dashes_2(){}
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
class DashStyle extends \Avalonia\Animation\Animatable implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IDashStyle
{
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public static function get_Dash(){}
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public static function get_Dot(){}
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public static function get_DashDot(){}
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	public static function get_DashDotDot(){}
	/**
	 * @uses DashStyleMethodsOverride::get_Dashes_1 ()
	 * @uses DashStyleMethodsOverride::get_Dashes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Dashes(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\AvaloniaList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Dashes($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Offset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected  function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected  function remove_Invalidated($value){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	public  function ToImmutable(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DashesChanged($sender, $e){}
	/**
	 * @uses DashStyleMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses DashStyleMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses DashStyleMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::get_Item_1 ($property)
	 * @uses DashStyleMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::set_Item_1 ($property, $value)
	 * @uses DashStyleMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::ClearValue_1 ($property)
	 * @uses DashStyleMethodsOverride::ClearValue_2 ($property)
	 * @uses DashStyleMethodsOverride::ClearValue_3 ($property)
	 * @uses DashStyleMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::GetValue_1 ($property)
	 * @uses DashStyleMethodsOverride::GetValue_2 ($property)
	 * @uses DashStyleMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses DashStyleMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses DashStyleMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses DashStyleMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses DashStyleMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses DashStyleMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses DashStyleMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses DashStyleMethodsOverride::Bind_5 ($property, $source)
	 * @uses DashStyleMethodsOverride::Bind_6 ($property, $source)
	 * @uses DashStyleMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DashStyleMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses DashStyleMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses DashStyleMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses DashStyleMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

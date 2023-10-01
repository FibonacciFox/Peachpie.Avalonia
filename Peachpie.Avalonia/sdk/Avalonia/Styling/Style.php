<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StyleMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	#[MethodOverride] public  function get_Children_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Children_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($setter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($style){}
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
class Style extends \Avalonia\Styling\StyleBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	/**
	 * @return \Avalonia\Styling\Selector
	 */
	public  function get_Selector(){}
	/**
	 * @param \Avalonia\Styling\Selector $value
	 * @return \System\Void|void
	 */
	public  function set_Selector($value){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \System\Object|object $host
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	protected  function TryAttach($target, $host, $type){}
	/**
	 * @param \Avalonia\Styling\Selector $selector
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateSelector($selector){}
	/**
	 * @uses StyleMethodsOverride::get_Children_1 ()
	 * @uses StyleMethodsOverride::get_Children_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Children(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @uses StyleMethodsOverride::Add_1 ($setter)
	 * @uses StyleMethodsOverride::Add_2 ($style)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddOwner($owner){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveOwner($owner){}
	/**
	 * @uses StyleMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses StyleMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses StyleMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::get_Item_1 ($property)
	 * @uses StyleMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::set_Item_1 ($property, $value)
	 * @uses StyleMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::ClearValue_1 ($property)
	 * @uses StyleMethodsOverride::ClearValue_2 ($property)
	 * @uses StyleMethodsOverride::ClearValue_3 ($property)
	 * @uses StyleMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::GetValue_1 ($property)
	 * @uses StyleMethodsOverride::GetValue_2 ($property)
	 * @uses StyleMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses StyleMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses StyleMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses StyleMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses StyleMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses StyleMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses StyleMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses StyleMethodsOverride::Bind_5 ($property, $source)
	 * @uses StyleMethodsOverride::Bind_6 ($property, $source)
	 * @uses StyleMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses StyleMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses StyleMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses StyleMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

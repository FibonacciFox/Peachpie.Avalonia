<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StyleBaseMethodsOverride
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
class StyleBase extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	/**
	 * @uses StyleBaseMethodsOverride::get_Children_1 ()
	 * @uses StyleBaseMethodsOverride::get_Children_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Children(mixed ...$args){}
	/**
	 * @return \Avalonia\Controls\IResourceHost
	 */
	public  function get_Owner(){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Owner($value){}
	/**
	 * @return \Avalonia\Styling\IStyle
	 */
	public  function get_Parent(){}
	/**
	 * @param \Avalonia\Styling\IStyle $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Parent($value){}
	/**
	 * @return \Avalonia\Controls\IResourceDictionary
	 */
	public  function get_Resources(){}
	/**
	 * @param \Avalonia\Controls\IResourceDictionary $value
	 * @return \System\Void|void
	 */
	public  function set_Resources($value){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Setters(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Animations(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasChildren(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasSettersOrAnimations(){}
	/**
	 * @uses StyleBaseMethodsOverride::Add_1 ($setter)
	 * @uses StyleBaseMethodsOverride::Add_2 ($style)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_OwnerChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_OwnerChanged($value){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $themeVariant
	 * @param \System\Object& $result
	 * @return \System\Boolean
	 */
	public  function TryGetResource($key, $themeVariant, $result){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \Avalonia\PropertyStore\ValueFrame
	 */
	protected  function Attach($target, $activator, $type){}
	/**
	 * @param \Avalonia\Styling\StyleBase $parent
	 * @return \System\Void|void
	 */
	protected  function SetParent($parent){}
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
	 * @uses StyleBaseMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses StyleBaseMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses StyleBaseMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::get_Item_1 ($property)
	 * @uses StyleBaseMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::set_Item_1 ($property, $value)
	 * @uses StyleBaseMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::ClearValue_1 ($property)
	 * @uses StyleBaseMethodsOverride::ClearValue_2 ($property)
	 * @uses StyleBaseMethodsOverride::ClearValue_3 ($property)
	 * @uses StyleBaseMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::GetValue_1 ($property)
	 * @uses StyleBaseMethodsOverride::GetValue_2 ($property)
	 * @uses StyleBaseMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses StyleBaseMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses StyleBaseMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses StyleBaseMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses StyleBaseMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses StyleBaseMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses StyleBaseMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses StyleBaseMethodsOverride::Bind_5 ($property, $source)
	 * @uses StyleBaseMethodsOverride::Bind_6 ($property, $source)
	 * @uses StyleBaseMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses StyleBaseMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses StyleBaseMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses StyleBaseMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses StyleBaseMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

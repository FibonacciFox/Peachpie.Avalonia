<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaObjectMethodsOverride
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
class AvaloniaObject extends \System\Object implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @uses AvaloniaObjectMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses AvaloniaObjectMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses AvaloniaObjectMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @return \Avalonia\AvaloniaObject
	 */
	protected  function get_InheritanceParent(){}
	/**
	 * @param \Avalonia\AvaloniaObject $value
	 * @return \System\Void|void
	 */
	protected  function set_InheritanceParent($value){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::get_Item_1 ($property)
	 * @uses AvaloniaObjectMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::set_Item_1 ($property, $value)
	 * @uses AvaloniaObjectMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public  function VerifyAccess(){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::ClearValue_1 ($property)
	 * @uses AvaloniaObjectMethodsOverride::ClearValue_2 ($property)
	 * @uses AvaloniaObjectMethodsOverride::ClearValue_3 ($property)
	 * @uses AvaloniaObjectMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::GetValue_1 ($property)
	 * @uses AvaloniaObjectMethodsOverride::GetValue_2 ($property)
	 * @uses AvaloniaObjectMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @return \Avalonia\Data\Optional_1
	 */
	public  function GetBaseValue($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean
	 */
	public  function IsAnimating($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean
	 */
	public  function IsSet($property){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses AvaloniaObjectMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses AvaloniaObjectMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses AvaloniaObjectMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses AvaloniaObjectMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses AvaloniaObjectMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses AvaloniaObjectMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses AvaloniaObjectMethodsOverride::Bind_5 ($property, $source)
	 * @uses AvaloniaObjectMethodsOverride::Bind_6 ($property, $source)
	 * @uses AvaloniaObjectMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function CoerceValue($property){}
	/**
	 * @param \Avalonia\AvaloniaObject $child
	 * @return \System\Void|void
	 */
	protected  function AddInheritanceChild($child){}
	/**
	 * @param \Avalonia\AvaloniaObject $child
	 * @return \System\Void|void
	 */
	protected  function RemoveInheritanceChild($child){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Diagnostics\AvaloniaPropertyValue
	 */
	protected  function GetDiagnosticInternal($property){}
	/**
	 * @return \Avalonia\PropertyStore\ValueStore
	 */
	protected  function GetValueStore(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetInheritanceChildren(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Exception $e
	 * @return \System\Nullable_1
	 */
	protected  function GetBindingWarningLogger($property, $e){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingValueType $state
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected  function UpdateDataValidation($property, $state, $error){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	protected  function OnPropertyChangedCore($change){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	protected  function OnPropertyChanged($change){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses AvaloniaObjectMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @param \Avalonia\DirectPropertyBase_1 $property
	 * @param \Avalonia\T& $field
	 * @param \Avalonia\T $value
	 * @return \System\Boolean
	 */
	protected  function SetAndRaise($property, $field, $value){}
	/**
	 * @uses AvaloniaObjectMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses AvaloniaObjectMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingValueType $state
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected  function OnUpdateDataValidation($property, $state, $error){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDescription($o){}
	/**
	 * @param \Avalonia\AvaloniaProperty_1 $property
	 * @param \Avalonia\T $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LogPropertySet($property, $value, $priority){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidatePriority($priority){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowInvalidPriority($priority){}
}

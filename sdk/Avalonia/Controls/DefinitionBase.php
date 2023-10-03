<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DefinitionBaseMethodsOverride
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
class DefinitionBase extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \System\String|string
	 */
	public  function get_SharedSizeGroup(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_SharedSizeGroup($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnEnterParentTree(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnExitParentTree(){}
	/**
	 * @param \Avalonia\Controls\Grid $grid
	 * @return \System\Void|void
	 */
	protected  function OnBeforeLayout($grid){}
	/**
	 * @param \System\Double|double $minSize
	 * @return \System\Void|void
	 */
	protected  function UpdateMinSize($minSize){}
	/**
	 * @param \System\Double|double $minSize
	 * @return \System\Void|void
	 */
	protected  function SetMinSize($minSize){}
	/**
	 * @param \Avalonia\AvaloniaObject $d
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected static function OnIsSharedSizeScopePropertyChanged($d, $e){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $definition
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected static function OnUserSizePropertyChanged($definition, $e){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsShared(){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	protected  function get_UserSize(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_UserMinSize(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_UserMaxSize(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_Index(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	protected  function set_Index($value){}
	/**
	 * @return \Avalonia\Controls\LayoutTimeSizeType
	 */
	protected  function get_SizeType(){}
	/**
	 * @param \Avalonia\Controls\LayoutTimeSizeType $value
	 * @return \System\Void|void
	 */
	protected  function set_SizeType($value){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_MeasureSize(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected  function set_MeasureSize($value){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_PreferredSize(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_SizeCache(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected  function set_SizeCache($value){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_MinSize(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_MinSizeForArrange(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_FinalOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected  function set_FinalOffset($value){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	protected  function get_UserSizeValueCache(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_UserMinSizeValueCache(){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_UserMaxSizeValueCache(){}
	/**
	 * @return \Avalonia\Controls\Grid
	 */
	protected  function get_Parent(){}
	/**
	 * @param \Avalonia\Controls\Grid $value
	 * @return \System\Void|void
	 */
	protected  function set_Parent($value){}
	/**
	 * @param \System\Boolean $value
	 * @param \Avalonia\Controls\Flags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFlags($value, $flags){}
	/**
	 * @param \Avalonia\Controls\Flags $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckFlagsAnd($flags){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $definition
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnSharedSizeGroupPropertyChanged($definition, $e){}
	/**
	 * @param \System\String|string $id
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SharedSizeGroupPropertyValueValid($id){}
	/**
	 * @param \Avalonia\Controls\DefinitionBase $definition
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnPrivateSharedSizeScopePropertyChanged($definition, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_UseSharedMinimum(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_UseSharedMinimum($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LayoutWasUpdated(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_LayoutWasUpdated($value){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsParentMeasure($properties){}
	/**
	 * @uses DefinitionBaseMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses DefinitionBaseMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses DefinitionBaseMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::get_Item_1 ($property)
	 * @uses DefinitionBaseMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::set_Item_1 ($property, $value)
	 * @uses DefinitionBaseMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::ClearValue_1 ($property)
	 * @uses DefinitionBaseMethodsOverride::ClearValue_2 ($property)
	 * @uses DefinitionBaseMethodsOverride::ClearValue_3 ($property)
	 * @uses DefinitionBaseMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::GetValue_1 ($property)
	 * @uses DefinitionBaseMethodsOverride::GetValue_2 ($property)
	 * @uses DefinitionBaseMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses DefinitionBaseMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses DefinitionBaseMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses DefinitionBaseMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses DefinitionBaseMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses DefinitionBaseMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses DefinitionBaseMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses DefinitionBaseMethodsOverride::Bind_5 ($property, $source)
	 * @uses DefinitionBaseMethodsOverride::Bind_6 ($property, $source)
	 * @uses DefinitionBaseMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DefinitionBaseMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses DefinitionBaseMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses DefinitionBaseMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses DefinitionBaseMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}

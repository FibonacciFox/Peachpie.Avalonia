<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueStoreMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_4($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function AddBinding_6($property, $source){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\PropertyStore\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveFrames_1($type){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveFrames_2($styles){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveEffectiveValue_1($property, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function RemoveEffectiveValue_2($property){}
}
/**
 */
class ValueStore extends \System\Object
{
	/**
	 * @return \Avalonia\AvaloniaObject
	 */
	public  function get_Owner(){}
	/**
	 * @return \Avalonia\PropertyStore\ValueStore
	 */
	public  function get_InheritanceAncestor(){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_InheritanceAncestor($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEvaluating(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Frames(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginStyling(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndStyling(){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $style
	 * @return \System\Void|void
	 */
	public  function AddFrame($style){}
	/**
	 * @uses ValueStoreMethodsOverride::AddBinding_1 ($property, $source, $priority)
	 * @uses ValueStoreMethodsOverride::AddBinding_2 ($property, $source, $priority)
	 * @uses ValueStoreMethodsOverride::AddBinding_3 ($property, $source, $priority)
	 * @uses ValueStoreMethodsOverride::AddBinding_4 ($property, $source)
	 * @uses ValueStoreMethodsOverride::AddBinding_5 ($property, $source)
	 * @uses ValueStoreMethodsOverride::AddBinding_6 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddBinding(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function ClearValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	public  function SetValue($property, $value, $priority){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \System\Void|void
	 */
	public  function SetCurrentValue($property, $value){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \System\Void|void
	 */
	public  function SetLocalValue($property, $value){}
	/**
	 * @uses ValueStoreMethodsOverride::GetValue_1 ($property)
	 * @uses ValueStoreMethodsOverride::GetValue_2 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
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
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function CoerceValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @return \System\Void|void
	 */
	public  function CoerceDefaultValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @return \Avalonia\Data\Optional_1
	 */
	public  function GetBaseValue($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue& $result
	 * @return \System\Boolean
	 */
	public  function TryGetInheritedValue($property, $result){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @return \Avalonia\PropertyStore\EffectiveValue_1
	 */
	public  function CreateEffectiveValue($property){}
	/**
	 * @param \Avalonia\AvaloniaObject $newParent
	 * @return \System\Void|void
	 */
	public  function SetInheritanceParent($newParent){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	public  function OnBindingValueChanged($entry, $priority){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @return \System\Void|void
	 */
	public  function OnFrameActivationChanged($frame){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $ancestor
	 * @return \System\Void|void
	 */
	public  function OnInheritanceAncestorChanged($ancestor){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue_1 $value
	 * @return \System\Void|void
	 */
	public  function OnInheritedEffectiveValueChanged($property, $oldValue, $value){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $oldValue
	 * @param \Avalonia\PropertyStore\T $newValue
	 * @return \System\Void|void
	 */
	public  function OnInheritedEffectiveValueDisposed($property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\IDisposable $observer
	 * @return \System\Void|void
	 */
	public  function OnLocalValueBindingCompleted($property, $observer){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $oldValue
	 * @param \Avalonia\PropertyStore\T $newValue
	 * @return \System\Void|void
	 */
	public  function OnAncestorInheritedValueChanged($property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public  function OnValueEntryRemoved($frame, $property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @return \System\Boolean
	 */
	public  function RemoveFrame($frame){}
	/**
	 * @uses ValueStoreMethodsOverride::RemoveFrames_1 ($type)
	 * @uses ValueStoreMethodsOverride::RemoveFrames_2 ($styles)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveFrames(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Diagnostics\AvaloniaPropertyValue
	 */
	public  function GetDiagnostic($property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertFrame($frame){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @param \System\Int32& $frameIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOrCreateImmediateValueFrame($property, $priority, $frameIndex){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue $effectiveValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddEffectiveValue($property, $effectiveValue){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddEffectiveValueAndRaise($property, $entry, $priority){}
	/**
	 * @uses ValueStoreMethodsOverride::RemoveEffectiveValue_1 ($property, $index)
	 * @uses ValueStoreMethodsOverride::RemoveEffectiveValue_2 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveEffectiveValue(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InheritedValueChanged($property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue $current
	 * @param \Avalonia\PropertyStore\IValueEntry $changedValueEntry
	 * @param \System\Boolean $ignoreLocalValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReevaluateEffectiveValue($property, $current, $changedValueEntry, $ignoreLocalValue){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $changedValueEntry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReevaluateEffectiveValues($changedValueEntry){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $entryPriority
	 * @param \Avalonia\PropertyStore\EffectiveValue $current
	 * @param \Avalonia\PropertyStore\IValueEntry $changedValueEntry
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HasHigherPriority($entry, $entryPriority, $current, $changedValueEntry){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetEffectiveValue($property, $value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEffectiveValue($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDefaultValue($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DisposeExistingLocalValueBinding($property){}
	/**
	 * @param \Avalonia\PropertyStore\FramePriority $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BinarySearchFrame($priority){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

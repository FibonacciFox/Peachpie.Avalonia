<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueStoreOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_1 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_2 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_3 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_4 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_5 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function AddBinding_6 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetValue_1 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public function GetValue_2 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\PropertyStore\FrameType $type
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveFrames_1 ($type){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveFrames_2 ($styles){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RemoveEffectiveValue_1 ($property, $index){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function RemoveEffectiveValue_2 ($property){}
}
class ValueStore extends \System\Object
{
	use ValueStoreOverride;

	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\ValueStore
	 */
	public $InheritanceAncestor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEvaluating;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\PropertyStore\ValueFrame]
	 * @since readonly
	 */
	public $Frames;
	/**
	 * @return \System\Void|void
	 */
	public function BeginStyling(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndStyling(){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $style
	 * @return \System\Void|void
	 */
	public function AddFrame($style){}
	/**
	 * @uses ValueStoreOverride::AddBinding_1 <br>public , args: ($property, $source, $priority)<br>
	 * @uses ValueStoreOverride::AddBinding_2 <br>public , args: ($property, $source, $priority)<br>
	 * @uses ValueStoreOverride::AddBinding_3 <br>public , args: ($property, $source, $priority)<br>
	 * @uses ValueStoreOverride::AddBinding_4 <br>public , args: ($property, $source)<br>
	 * @uses ValueStoreOverride::AddBinding_5 <br>public , args: ($property, $source)<br>
	 * @uses ValueStoreOverride::AddBinding_6 <br>public , args: ($property, $source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function AddBinding (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function ClearValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	public function SetValue($property, $value, $priority){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function SetCurrentValue($property, $value){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function SetLocalValue($property, $value){}
	/**
	 * @uses ValueStoreOverride::GetValue_1 <br>public , args: ($property)<br>
	 * @uses ValueStoreOverride::GetValue_2 <br>public , args: ($property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValue (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	public function IsAnimating($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	public function IsSet($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function CoerceValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \System\Void|void
	 */
	public function CoerceDefaultValue($property){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \Avalonia\Data\Optional_1[T]
	 */
	public function GetBaseValue($property){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryGetInheritedValue($property, &$result){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \Avalonia\PropertyStore\EffectiveValue_1[T]
	 */
	public function CreateEffectiveValue($property){}
	/**
	 * @param \Avalonia\AvaloniaObject $newParent
	 * @return \System\Void|void
	 */
	public function SetInheritanceParent($newParent){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	public function OnBindingValueChanged($entry, $priority){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @return \System\Void|void
	 */
	public function OnFrameActivationChanged($frame){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $ancestor
	 * @return \System\Void|void
	 */
	public function OnInheritanceAncestorChanged($ancestor){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	public function OnInheritedEffectiveValueChanged($property, $oldValue, $value){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \System\Void|void
	 */
	public function OnInheritedEffectiveValueDisposed($property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\IDisposable $observer
	 * @return \System\Void|void
	 */
	public function OnLocalValueBindingCompleted($property, $observer){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \System\Void|void
	 */
	public function OnAncestorInheritedValueChanged($property, $oldValue, $newValue){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function OnValueEntryRemoved($frame, $property){}
	/**
	 * @param \Avalonia\PropertyStore\ValueFrame $frame
	 * @return \System\Boolean|bool
	 */
	public function RemoveFrame($frame){}
	/**
	 * @uses ValueStoreOverride::RemoveFrames_1 <br>public , args: ($type)<br>
	 * @uses ValueStoreOverride::RemoveFrames_2 <br>public , args: ($styles)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RemoveFrames (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Diagnostics\AvaloniaPropertyValue
	 */
	public function GetDiagnostic($property){}
	private function InsertFrame($frame){}
	private function GetOrCreateImmediateValueFrame($property, $priority, &$frameIndex){}
	private function AddEffectiveValue($property, $effectiveValue){}
	private function AddEffectiveValueAndRaise($property, $entry, $priority){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses ValueStoreOverride::RemoveEffectiveValue_1 <br>private , args: ($property, $index)<br>
	 * @uses ValueStoreOverride::RemoveEffectiveValue_2 <br>private , args: ($property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function RemoveEffectiveValue (\override ...$args){}
	private function InheritedValueChanged($property, $oldValue, $newValue){}
	private function ReevaluateEffectiveValue($property, $current, $changedValueEntry, $ignoreLocalValue){}
	private function ReevaluateEffectiveValues($changedValueEntry){}
	private static function HasHigherPriority($entry, $entryPriority, $current, $changedValueEntry){}
	private function TryGetEffectiveValue($property, &$value){}
	private function GetEffectiveValue($property){}
	private function GetDefaultValue($property){}
	private function DisposeExistingLocalValueBinding($property){}
	private function BinarySearchFrame($priority){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 */
	public function __construct($owner){}
}
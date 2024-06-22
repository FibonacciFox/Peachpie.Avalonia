<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaObjectOverride {
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function add_PropertyChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function add_PropertyChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\AvaloniaPropertyChangedEventArgs]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function remove_PropertyChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function remove_PropertyChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function get_Item_1 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\IndexerDescriptor $binding
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride]public function get_Item_2 ($binding){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_1 ($property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\Data\IndexerDescriptor $binding
	 * @param \Avalonia\Data\IBinding $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Item_2 ($binding, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ClearValue_1 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ClearValue_2 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ClearValue_3 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function ClearValue_4 ($property){}
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
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @return \T|object
	 */
	#[MethodOverride]public function GetValue_3 ($property){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function SetValue_1 ($property, $value, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function SetValue_2 ($property, $value, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetValue_3 ($property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCurrentValue_1 ($property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetCurrentValue_2 ($property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_1 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_2 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_3 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_4 ($property, $source, $priority){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_5 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_6 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public function Bind_7 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \T|object $oldValue
	 * @param \T|object $newValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RaisePropertyChanged_1 ($property, $oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaProperty_1 $property [generic: T]
	 * @param \Avalonia\Data\Optional_1 $oldValue [generic: T]
	 * @param \Avalonia\Data\BindingValue_1 $newValue [generic: T]
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @param \System\Boolean|bool $isEffectiveValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetDirectValueUnchecked_1 ($property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetDirectValueUnchecked_2 ($property, $value){}
}
class AvaloniaObject extends \System\Object implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use AvaloniaObjectOverride;

	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses AvaloniaObjectOverride::add_PropertyChanged_1 <br>public , args: ($value)<br>
	 * @uses AvaloniaObjectOverride::add_PropertyChanged_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function add_PropertyChanged (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::remove_PropertyChanged_1 <br>public , args: ($value)<br>
	 * @uses AvaloniaObjectOverride::remove_PropertyChanged_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function remove_PropertyChanged (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::get_Item_1 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::get_Item_2 <br>public , args: ($binding)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\Avalonia\Data\IBinding|mixed|\override
	 */
	#[MethodOverridePublic]function get_Item (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::set_Item_1 <br>public , args: ($property, $value)<br>
	 * @uses AvaloniaObjectOverride::set_Item_2 <br>public , args: ($binding, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Item (\override ...$args){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public function VerifyAccess(){}
	/**
	 * @uses AvaloniaObjectOverride::ClearValue_1 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::ClearValue_2 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::ClearValue_3 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::ClearValue_4 <br>public , args: ($property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ClearValue (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::GetValue_1 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::GetValue_2 <br>public , args: ($property)<br>
	 * @uses AvaloniaObjectOverride::GetValue_3 <br>public , args: ($property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetValue (\override ...$args){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @return \Avalonia\Data\Optional_1[T]
	 */
	public function GetBaseValue($property){}
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
	 * @uses AvaloniaObjectOverride::SetValue_1 <br>public , args: ($property, $value, $priority)<br>
	 * @uses AvaloniaObjectOverride::SetValue_2 <br>public , args: ($property, $value, $priority)<br>
	 * @uses AvaloniaObjectOverride::SetValue_3 <br>public , args: ($property, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetValue (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::SetCurrentValue_1 <br>public , args: ($property, $value)<br>
	 * @uses AvaloniaObjectOverride::SetCurrentValue_2 <br>public , args: ($property, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCurrentValue (\override ...$args){}
	/**
	 * @uses AvaloniaObjectOverride::Bind_1 <br>public , args: ($property, $source, $priority)<br>
	 * @uses AvaloniaObjectOverride::Bind_2 <br>public , args: ($property, $source, $priority)<br>
	 * @uses AvaloniaObjectOverride::Bind_3 <br>public , args: ($property, $source, $priority)<br>
	 * @uses AvaloniaObjectOverride::Bind_4 <br>public , args: ($property, $source, $priority)<br>
	 * @uses AvaloniaObjectOverride::Bind_5 <br>public , args: ($property, $source)<br>
	 * @uses AvaloniaObjectOverride::Bind_6 <br>public , args: ($property, $source)<br>
	 * @uses AvaloniaObjectOverride::Bind_7 <br>public , args: ($property, $source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function Bind (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function CoerceValue($property){}
	/**
	 * @param \Avalonia\AvaloniaObject $child
	 * @return \System\Void|void
	 */
	protected function AddInheritanceChild($child){}
	/**
	 * @param \Avalonia\AvaloniaObject $child
	 * @return \System\Void|void
	 */
	protected function RemoveInheritanceChild($child){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \Avalonia\Diagnostics\AvaloniaPropertyValue
	 */
	protected function GetDiagnosticInternal($property){}
	/**
	 * @return \Avalonia\PropertyStore\ValueStore
	 */
	protected function GetValueStore(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\AvaloniaObject]
	 */
	protected function GetInheritanceChildren(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Exception $e
	 * @return \System\Nullable_1[Avalonia\Logging\ParametrizedLogger]
	 */
	protected function GetBindingWarningLogger($property, $e){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingValueType $state
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected function UpdateDataValidation($property, $state, $error){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	protected function OnPropertyChangedCore($change){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $change
	 * @return \System\Void|void
	 */
	protected function OnPropertyChanged($change){}
	/**
	 * @uses AvaloniaObjectOverride::RaisePropertyChanged_1 <br>protected , args: ($property, $oldValue, $newValue)<br>
	 * @uses AvaloniaObjectOverride::RaisePropertyChanged_2 <br>protected , args: ($property, $oldValue, $newValue, $priority, $isEffectiveValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function RaisePropertyChanged (\override ...$args){}
	/**
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 * @param \T& $field
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	protected function SetAndRaise($property, $field, $value){}
	/**
	 * @uses AvaloniaObjectOverride::SetDirectValueUnchecked_1 <br>protected , args: ($property, $value)<br>
	 * @uses AvaloniaObjectOverride::SetDirectValueUnchecked_2 <br>protected , args: ($property, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetDirectValueUnchecked (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingValueType $state
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	protected function OnUpdateDataValidation($property, $state, $error){}
	private function GetDescription($o){}
	private function LogPropertySet($property, $value, $priority){}
	private static function ValidatePriority($priority){}
	private static function ThrowInvalidPriority($priority){}
	/**
	 */
	public function __construct(){}
}
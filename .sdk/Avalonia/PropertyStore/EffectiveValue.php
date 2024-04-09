<?php
namespace Avalonia\PropertyStore;
class EffectiveValue extends \System\Object
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 */
	public $Priority;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 */
	public $BasePriority;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\IValueEntry
	 */
	public $ValueEntry;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\IValueEntry
	 */
	public $BaseValueEntry;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasCoercion;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsOverridenCurrentValue;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsCoercedDefaultValue;
	/**
	 * @param \System\Boolean|bool $clearLocalValue
	 * @return \System\Void|void
	 */
	public function BeginReevaluation($clearLocalValue){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	public function EndReevaluation($owner, $property){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CanRemove(){}
	/**
	 * @return \System\Void|void
	 */
	public function UnsubscribeIfNecessary(){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	abstract public function SetAndRaise($owner, $value, $priority);
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\EffectiveValue $oldValue
	 * @param \Avalonia\PropertyStore\EffectiveValue $newValue
	 * @return \System\Void|void
	 */
	abstract public function RaiseInheritedValueChanged($owner, $property, $oldValue, $newValue);
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	abstract public function RemoveAnimationAndRaise($owner, $property);
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	abstract public function CoerceValue($owner, $property);
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	abstract public function DisposeAndRaiseUnset($owner, $property);
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	abstract protected function CoerceDefaultValueAndRaise($owner, $property);
	/**
	 * @return \System\Object|object
	 */
	abstract protected function GetBoxedValue();
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $entry
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Void|void
	 */
	protected function UpdateValueEntry($entry, $priority){}
}
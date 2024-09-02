<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EffectiveValue_1Override {
	/**
	 * @deprecated
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @param \System\Boolean|bool $isOverriddenCurrentValue
	 * @param \System\Boolean|bool $isCoercedDefaultValue
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetAndRaiseCore_1 ($owner, $property, $value, $priority, $isOverriddenCurrentValue, $isCoercedDefaultValue){}
	/**
	 * @deprecated
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @param \T|object $baseValue
	 * @param \Avalonia\Data\BindingPriority $basePriority
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetAndRaiseCore_2 ($owner, $property, $value, $priority, $baseValue, $basePriority){}
}
final class EffectiveValue_1 extends \Avalonia\PropertyStore\EffectiveValue
{
	use EffectiveValue_1Override;
	/**
	 * @property dublicate
	 * @var \T|object|\System\Object|object
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
	 * @since readonly
	 */
	public $ValueEntry;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\IValueEntry
	 * @since readonly
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
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function SetLocalValueAndRaise($owner, $property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function SetCurrentValueAndRaise($owner, $property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public function SetCoercedDefaultValueAndRaise($owner, $property, $value){}
	/**
	 * @param \T& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetBaseValue(&$value){}
	private static function GetValue($entry){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EffectiveValue_1Override::SetAndRaiseCore_1 <br>private , args: ($owner, $property, $value, $priority, $isOverriddenCurrentValue, $isCoercedDefaultValue)<br>
	 * @uses EffectiveValue_1Override::SetAndRaiseCore_2 <br>private , args: ($owner, $property, $value, $priority, $baseValue, $basePriority)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function SetAndRaiseCore (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \Avalonia\PropertyStore\EffectiveValue_1 $inherited [generic: T]
	 */
	public function __construct($owner, $property, $inherited){}
}
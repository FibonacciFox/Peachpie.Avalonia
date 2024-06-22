<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmediateValueFrameOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: Avalonia\Data\BindingValue_1[T]
	 * @return \Avalonia\PropertyStore\TypedBindingEntry_1
	 */
	#[MethodOverride]public function AddBinding_1 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: T]
	 * @return \Avalonia\PropertyStore\TypedBindingEntry_1
	 */
	#[MethodOverride]public function AddBinding_2 ($property, $source){}
	/**
	 * @deprecated
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @return \Avalonia\PropertyStore\SourceUntypedBindingEntry_1
	 */
	#[MethodOverride]public function AddBinding_3 ($property, $source){}
}
final class ImmediateValueFrame extends \Avalonia\PropertyStore\ValueFrame
{
	use ImmediateValueFrameOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $EntryCount;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\ValueStore
	 * @since readonly
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingPriority
	 * @since readonly
	 */
	public $Priority;
	/**
	 * @property
	 * @var \Avalonia\PropertyStore\FramePriority
	 * @since readonly
	 */
	public $FramePriority;
	/**
	 * @uses ImmediateValueFrameOverride::AddBinding_1 <br>public , args: ($property, $source)<br>
	 * @uses ImmediateValueFrameOverride::AddBinding_2 <br>public , args: ($property, $source)<br>
	 * @uses ImmediateValueFrameOverride::AddBinding_3 <br>public , args: ($property, $source)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PropertyStore\TypedBindingEntry_1|\Avalonia\PropertyStore\SourceUntypedBindingEntry_1|mixed|\override
	 */
	#[MethodOverridePublic]function AddBinding (\override ...$args){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 * @param \T|object $value
	 * @return \Avalonia\PropertyStore\ImmediateValueEntry_1[T]
	 */
	public function AddValue($property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @return \System\Void|void
	 */
	public function OnEntryDisposed($value){}
	/**
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	public function __construct($priority){}
}
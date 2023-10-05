<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmediateValueFrameMethodsOverride
{
	/**
	 * @return \Avalonia\PropertyStore\TypedBindingEntry_1
	 */
	#[MethodOverride] public  function AddBinding_1($property, $source){}
	/**
	 * @return \Avalonia\PropertyStore\TypedBindingEntry_1
	 */
	#[MethodOverride] public  function AddBinding_2($property, $source){}
	/**
	 * @return \Avalonia\PropertyStore\SourceUntypedBindingEntry_1
	 */
	#[MethodOverride] public  function AddBinding_3($property, $source){}
}
/**
 */
class ImmediateValueFrame extends \Avalonia\PropertyStore\ValueFrame
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $EntryCount;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \Avalonia\PropertyStore\ValueStore
	 * @property
	 */
	public readonly $Owner;
	/**
	 * @var \Avalonia\Data\BindingPriority
	 * @property
	 */
	public readonly $Priority;
	/**
	 * @var \Avalonia\PropertyStore\FramePriority
	 * @property
	 */
	public readonly $FramePriority;
	/**
	 * @uses ImmediateValueFrameMethodsOverride::AddBinding_1 ($property, $source)
	 * @uses ImmediateValueFrameMethodsOverride::AddBinding_2 ($property, $source)
	 * @uses ImmediateValueFrameMethodsOverride::AddBinding_3 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddBinding(mixed ...$args){}
	/**
	 * @param \Avalonia\StyledProperty_1 $property
	 * @param \Avalonia\PropertyStore\T $value
	 * @return \Avalonia\PropertyStore\ImmediateValueEntry_1
	 */
	public  function AddValue($property, $value){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @return \System\Void|void
	 */
	public  function OnEntryDisposed($value){}
}

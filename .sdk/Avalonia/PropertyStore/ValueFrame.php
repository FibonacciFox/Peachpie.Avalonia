<?php
namespace Avalonia\PropertyStore;
class ValueFrame extends \System\Object
{

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
	 * @return \System\Boolean|bool
	 */
	public function IsActive(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean|bool
	 */
	public function Contains($property){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\PropertyStore\IValueEntry
	 */
	public function GetEntry($index){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @return \System\Void|void
	 */
	public function SetOwner($owner){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\IValueEntry& &$entry
	 * @param \System\Boolean& &$activeChanged
	 * @return \System\Boolean|bool
	 */
	public function TryGetEntryIfActive($property, &$entry, &$activeChanged){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $binding
	 * @return \System\Void|void
	 */
	public function OnBindingCompleted($binding){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Boolean& &$hasChanged
	 * @return \System\Boolean|bool
	 */
	abstract protected function GetIsActive(&$hasChanged);
	/**
	 * @return \System\Void|void
	 */
	protected function MakeShared(){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @return \System\Void|void
	 */
	protected function Add($value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	protected function Remove($property){}
}
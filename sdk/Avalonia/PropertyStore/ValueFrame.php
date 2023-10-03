<?php
namespace Avalonia\PropertyStore;
/**
 */
class ValueFrame extends \System\Object
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EntryCount(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @return \Avalonia\PropertyStore\ValueStore
	 */
	public  function get_Owner(){}
	/**
	 * @return \Avalonia\Data\BindingPriority
	 */
	public  function get_Priority(){}
	/**
	 * @return \Avalonia\PropertyStore\FramePriority
	 */
	public  function get_FramePriority(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean
	 */
	public  function Contains($property){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\PropertyStore\IValueEntry
	 */
	public  function GetEntry($index){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @return \System\Void|void
	 */
	public  function SetOwner($owner){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\PropertyStore\IValueEntry& $entry
	 * @param \System\Boolean& $activeChanged
	 * @return \System\Boolean
	 */
	public  function TryGetEntryIfActive($property, $entry, $activeChanged){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $binding
	 * @return \System\Void|void
	 */
	public  function OnBindingCompleted($binding){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Boolean& $hasChanged
	 * @return \System\Boolean
	 */
	protected  function GetIsActive($hasChanged){}
	/**
	 * @return \System\Void|void
	 */
	protected  function MakeShared(){}
	/**
	 * @param \Avalonia\PropertyStore\IValueEntry $value
	 * @return \System\Void|void
	 */
	protected  function Add($value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Void|void
	 */
	protected  function Remove($property){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Input;
/**
 */
class DragDrop extends \System\Object
{
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 * @field
	 */
	public readonly $DragEnterEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 * @field
	 */
	public readonly $DragLeaveEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 * @field
	 */
	public readonly $DragOverEvent;
	/**
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 * @field
	 */
	public readonly $DropEvent;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $AllowDropProperty;
	/**
	 * @param \Avalonia\Interactivity\Interactive $interactive
	 * @return \System\Boolean
	 */
	public static function GetAllowDrop($interactive){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $interactive
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAllowDrop($interactive, $value){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1
	 */
	public static function DoDragDrop($triggerEvent, $data, $allowedEffects){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Input;
class DragDrop extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 */
	public static $DragEnterEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 */
	public static $DragLeaveEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 */
	public static $DragOverEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Input\DragEventArgs]
	 */
	public static $DropEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AllowDropProperty;
	/**
	 * @param \Avalonia\Interactivity\Interactive $interactive
	 * @return \System\Boolean|bool
	 */
	public static function GetAllowDrop($interactive){}
	/**
	 * @param \Avalonia\Interactivity\Interactive $interactive
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetAllowDrop($interactive, $value){}
	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Input\DragDropEffects]
	 */
	public static function DoDragDrop($triggerEvent, $data, $allowedEffects){}
}
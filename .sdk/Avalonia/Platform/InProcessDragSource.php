<?php
namespace Avalonia\Platform;
class InProcessDragSource extends \System\Object implements
	\Avalonia\Input\Platform\IPlatformDragSource
{

	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Input\DragDropEffects]
	 */
	public function DoDragDrop($triggerEvent, $data, $allowedEffects){}
	private function RaiseEventAndUpdateCursor($type, $root, $pt, $modifiers){}
	private static function GetPreferredEffect($effect, $modifiers){}
	private static function GetCursorForDropEffect($effects){}
	private function UpdateCursor($root, $effect){}
	private function CancelDragging(){}
	private function ProcessKeyEvents($e){}
	private function ProcessMouseEvents($e){}
	/**
	 */
	public function __construct(){}
}
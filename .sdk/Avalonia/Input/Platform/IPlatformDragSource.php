<?php
namespace Avalonia\Input\Platform;
interface IPlatformDragSource
{


	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1[Avalonia\Input\DragDropEffects]
	 */
	public function DoDragDrop($triggerEvent, $data, $allowedEffects);
}
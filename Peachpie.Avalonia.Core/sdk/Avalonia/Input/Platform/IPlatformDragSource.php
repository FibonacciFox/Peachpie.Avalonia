<?php
namespace Avalonia\Input\Platform;
/**
 */
interface IPlatformDragSource
{
	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 */
	public function DoDragDrop($triggerEvent, $data, $allowedEffects);
}

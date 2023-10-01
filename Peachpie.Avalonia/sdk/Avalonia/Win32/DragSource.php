<?php
namespace Avalonia\Win32;
/**
 */
class DragSource extends \System\Object implements 
	\Avalonia\Input\Platform\IPlatformDragSource
{
	/**
	 * @param \Avalonia\Input\PointerEventArgs $triggerEvent
	 * @param \Avalonia\Input\IDataObject $data
	 * @param \Avalonia\Input\DragDropEffects $allowedEffects
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function DoDragDrop($triggerEvent, $data, $allowedEffects){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

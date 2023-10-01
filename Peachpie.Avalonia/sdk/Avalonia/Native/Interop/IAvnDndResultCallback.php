<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnDndResultCallback
{
	/**
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effecct
	 */
	public function OnDragAndDropComplete($effecct);
}

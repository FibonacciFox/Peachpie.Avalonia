<?php
namespace Avalonia\Input;
/**
 */
interface IPointerDevice
{
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 */
	public function TryGetPointer($ev);
}

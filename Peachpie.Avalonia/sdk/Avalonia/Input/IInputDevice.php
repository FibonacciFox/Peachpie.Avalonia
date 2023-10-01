<?php
namespace Avalonia\Input;
/**
 */
interface IInputDevice
{
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $ev
	 */
	public function ProcessRawEvent($ev);
}

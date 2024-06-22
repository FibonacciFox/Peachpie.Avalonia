<?php
namespace Avalonia\Input;
interface IInputDevice
{


	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $ev
	 * @return \System\Void|void
	 */
	public function ProcessRawEvent($ev);
}
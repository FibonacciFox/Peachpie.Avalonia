<?php
namespace Avalonia\Input;
interface IInputManager
{

	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public function ProcessInput($e);
}
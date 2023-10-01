<?php
namespace Avalonia\Input;
/**
 */
interface IInputManager
{
	/**
	 */
	public function get_PreProcess();
	/**
	 */
	public function get_Process();
	/**
	 */
	public function get_PostProcess();
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 */
	public function ProcessInput($e);
}

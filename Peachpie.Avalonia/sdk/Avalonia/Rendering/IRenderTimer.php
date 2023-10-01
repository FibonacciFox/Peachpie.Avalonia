<?php
namespace Avalonia\Rendering;
/**
 */
interface IRenderTimer
{
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_Tick($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_Tick($value);
	/**
	 */
	public function get_RunsInBackground();
}

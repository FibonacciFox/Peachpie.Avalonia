<?php
namespace Avalonia\Rendering;
/**
 */
interface IRenderLoop
{
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 */
	public function Add($i);
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 */
	public function Remove($i);
	/**
	 */
	public function get_RunsInBackground();
}

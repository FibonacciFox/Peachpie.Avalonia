<?php
namespace Avalonia\Rendering;
interface IRenderLoop
{


	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public function Add($i);
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public function Remove($i);
}
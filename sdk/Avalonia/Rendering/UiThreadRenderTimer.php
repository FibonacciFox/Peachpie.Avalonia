<?php
namespace Avalonia\Rendering;
/**
 */
class UiThreadRenderTimer extends \Avalonia\Rendering\DefaultRenderTimer implements 
	\Avalonia\Rendering\IRenderTimer
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $RunsInBackground;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $FramesPerSecond;
}

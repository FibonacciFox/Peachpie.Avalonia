<?php
namespace Avalonia\Rendering;
class UiThreadRenderTimer extends \Avalonia\Rendering\DefaultRenderTimer implements
	\Avalonia\Rendering\IRenderTimer
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $RunsInBackground;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FramesPerSecond;
	/**
	 * @param \System\Int32|int $framesPerSecond
	 */
	public function __construct($framesPerSecond){}
}
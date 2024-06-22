<?php
namespace Avalonia\Rendering;
class RenderLoop extends \System\Object implements
	\Avalonia\Rendering\IRenderLoop
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\IRenderLoop
	 * @since readonly
	 */
	public $LocatorAutoInstance;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $RunsInBackground;
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public function Add($i){}
	/**
	 * @param \Avalonia\Rendering\IRenderLoopTask $i
	 * @return \System\Void|void
	 */
	public function Remove($i){}
	private function TimerTick($time){}
	/**
	 * @param \Avalonia\Rendering\IRenderTimer $timer
	 */
	public function __construct($timer){}
}
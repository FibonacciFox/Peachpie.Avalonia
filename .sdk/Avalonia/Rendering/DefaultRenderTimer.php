<?php
namespace Avalonia\Rendering;
class DefaultRenderTimer extends \System\Object implements
	\Avalonia\Rendering\IRenderTimer
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FramesPerSecond;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $RunsInBackground;
	/**
	 * @param \System\Action_1 $value [generic: System\TimeSpan]
	 * @return \System\Void|void
	 */
	public function add_Tick($value){}
	/**
	 * @param \System\Action_1 $value [generic: System\TimeSpan]
	 * @return \System\Void|void
	 */
	public function remove_Tick($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function Start(){}
	/**
	 * @param \System\Action_1 $tick [generic: System\TimeSpan]
	 * @return \System\IDisposable
	 */
	protected function StartCore($tick){}
	/**
	 * @return \System\Void|void
	 */
	protected function Stop(){}
	private function InternalTick($tickCount){}
	/**
	 * @param \System\Int32|int $framesPerSecond
	 */
	public function __construct($framesPerSecond){}
}
<?php
namespace Avalonia\Rendering;
class SleepLoopRenderTimer extends \System\Object implements
	\Avalonia\Rendering\IRenderTimer
{

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
	private function LoopProc(){}
	/**
	 * @param \System\Int32|int $fps
	 */
	public function __construct($fps){}
}
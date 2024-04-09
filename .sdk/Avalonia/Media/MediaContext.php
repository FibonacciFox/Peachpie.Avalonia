<?php
namespace Avalonia\Media;
class MediaContext extends \System\Object implements
	\Avalonia\Rendering\Composition\ICompositorScheduler
{
	/**
	 * @property
	 * @var \Avalonia\Animation\IGlobalClock
	 * @since readonly
	 */
	public $Clock;
	/**
	 * @property
	 * @var \Avalonia\Media\MediaContext
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Action_1 $action [generic: System\TimeSpan]
	 * @return \System\Void|void
	 */
	public function RequestAnimationFrame($action){}
	private function CommitCompositor($compositor){}
	private function CompositionBatchFinished($compositor, $batch){}
	private function ScheduleRenderForAnimationsIfNeeded(){}
	private function CommitCompositorsWithThrottling(){}
	private function SyncCommit($compositor, $waitFullRender){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionTarget $target
	 * @return \System\Void|void
	 */
	public function ImmediateRenderRequested($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionTarget $compositionTarget
	 * @return \System\Void|void
	 */
	public function SyncDisposeCompositionTarget($compositionTarget){}
	private function CommitRequested($compositor){}
	private function ScheduleRender($now){}
	private function InputMarkerHandler(){}
	private function Render(){}
	private function RenderCore(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean|bool
	 */
	public function IsTopLevelActive($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Layout\ILayoutManager $layoutManager
	 * @param \Avalonia\Rendering\IRenderer $renderer
	 * @return \System\Void|void
	 */
	public function AddTopLevel($key, $layoutManager, $renderer){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public function RemoveTopLevel($key){}
	private function FireInvokeOnRenderCallbacks(){}
	/**
	 * @param \System\Action $callback
	 * @return \System\Void|void
	 */
	public function BeginInvokeOnRender($callback){}
}
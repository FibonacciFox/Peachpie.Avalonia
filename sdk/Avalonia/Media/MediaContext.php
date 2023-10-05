<?php
namespace Avalonia\Media;
/**
 */
class MediaContext extends \System\Object implements 
	\Avalonia\Rendering\Composition\ICompositorScheduler
{
	/**
	 * @var \Avalonia\Animation\IGlobalClock
	 * @property
	 */
	public readonly $Clock;
	/**
	 * @var \Avalonia\Media\MediaContext
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Animation\IGlobalClock
	 */
	public  function get_Clock(){}
	/**
	 * @param \System\Action_1 $action
	 * @return \System\Void|void
	 */
	public  function RequestAnimationFrame($action){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitCompositor($compositor){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Rendering\Composition\Transport\Batch $batch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompositionBatchFinished($compositor, $batch){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScheduleRenderForAnimationsIfNeeded(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitCompositorsWithThrottling(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \System\Boolean $waitFullRender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SyncCommit($compositor, $waitFullRender){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionTarget $target
	 * @return \System\Void|void
	 */
	public  function ImmediateRenderRequested($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionTarget $compositionTarget
	 * @return \System\Void|void
	 */
	public  function SyncDisposeCompositionTarget($compositionTarget){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitRequested($compositor){}
	/**
	 * @return \Avalonia\Media\MediaContext
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\Boolean $now
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScheduleRender($now){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InputMarkerHandler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Render(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RenderCore(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function IsTopLevelActive($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Layout\ILayoutManager $layoutManager
	 * @param \Avalonia\Rendering\IRenderer $renderer
	 * @return \System\Void|void
	 */
	public  function AddTopLevel($key, $layoutManager, $renderer){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Void|void
	 */
	public  function RemoveTopLevel($key){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FireInvokeOnRenderCallbacks(){}
	/**
	 * @param \System\Action $callback
	 * @return \System\Void|void
	 */
	public  function BeginInvokeOnRender($callback){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

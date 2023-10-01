<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 */
class ServerCompositor extends \System\Object implements 
	\Avalonia\Rendering\IRenderLoopTask
{
	/**
	 * @return \System\Int64|int
	 */
	public  function get_LastBatchId(){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_LastBatchId($value){}
	/**
	 * @return \System\Diagnostics\Stopwatch
	 */
	public  function get_Clock(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_ServerNow(){}
	/**
	 * @param \System\TimeSpan $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ServerNow($value){}
	/**
	 * @return \Avalonia\Rendering\PlatformRenderInterfaceContextManager
	 */
	public  function get_RenderInterface(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\Batch $batch
	 * @return \System\Void|void
	 */
	public  function EnqueueBatch($batch){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateServerTime(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ApplyPendingBatches(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadServerJobs($reader){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $reader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadDisposeJobs($reader){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteServerJobs(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyBatchesProcessed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyBatchesRendered(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Render(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RenderCore(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	public  function AddCompositionTarget($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	public  function RemoveCompositionTarget($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerClockItem $item
	 * @return \System\Void|void
	 */
	public  function AddToClock($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerClockItem $item
	 * @return \System\Void|void
	 */
	public  function RemoveFromClock($item){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public  function CreateRenderTarget($surfaces){}
	/**
	 * @return \System\Boolean
	 */
	public  function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public  function VerifyAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ApplyEnqueuedRenderResourceChanges(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $resource
	 * @return \System\Void|void
	 */
	public  function EnqueueRenderResourceForInvalidation($resource){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

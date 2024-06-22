<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositor extends \System\Object implements
	\Avalonia\Rendering\IRenderLoopTask
{

	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Transport\BatchStreamObjectPool_1[System\Object]
	 */
	protected $BatchObjectPool;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Transport\BatchStreamMemoryPool
	 */
	protected $BatchMemoryPool;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected static $RenderThreadDisposeStartMarker;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected static $RenderThreadJobsStartMarker;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected static $RenderThreadJobsEndMarker;
	/**
	 * @property
	 * @var \System\Int64|int
	 */
	public $LastBatchId;
	/**
	 * @property
	 * @var \System\Diagnostics\Stopwatch
	 * @since readonly
	 */
	public $Clock;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $ServerNow;
	/**
	 * @property
	 * @var \Avalonia\Rendering\PlatformRenderInterfaceContextManager
	 * @since readonly
	 */
	public $RenderInterface;
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\CompositionBatch $batch
	 * @return \System\Void|void
	 */
	public function EnqueueBatch($batch){}
	/**
	 * @return \System\Void|void
	 */
	protected function UpdateServerTime(){}
	private function ApplyPendingBatches(){}
	private function ReadServerJobs($reader){}
	private function ReadDisposeJobs($reader){}
	private function ExecuteServerJobs(){}
	private function NotifyBatchesProcessed(){}
	private function NotifyBatchesRendered(){}
	/**
	 * @return \System\Void|void
	 */
	public function Render(){}
	private function RenderReentrancySafe(){}
	private function RenderCore(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	public function AddCompositionTarget($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionTarget $target
	 * @return \System\Void|void
	 */
	public function RemoveCompositionTarget($target){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerClockItem $item
	 * @return \System\Void|void
	 */
	public function AddToClock($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerClockItem $item
	 * @return \System\Void|void
	 */
	public function RemoveFromClock($item){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces [generic: System\Object]
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public function CreateRenderTarget($surfaces){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function CheckAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public function VerifyAccess(){}
	/**
	 * @return \System\Void|void
	 */
	public function ApplyEnqueuedRenderResourceChanges(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\IServerRenderResource $resource
	 * @return \System\Void|void
	 */
	public function EnqueueRenderResourceForInvalidation($resource){}
	private function RT_OnContextCreated($context){}
	private function RT_OnContextLostExceptionFilterObserver($e){}
	private function RT_OnContextDisposed(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2[System\Type,System\Object]
	 */
	public function AT_TryGetCachedRenderInterfaceFeatures(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2[System\Type,System\Object]
	 */
	public function RT_GetRenderInterfaceFeatures(){}
	/**
	 * @param \Avalonia\Rendering\IRenderLoop $renderLoop
	 * @param \Avalonia\Platform\IPlatformGraphics $platformGraphics
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamObjectPool_1 $batchObjectPool [generic: System\Object]
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamMemoryPool $batchMemoryPool
	 */
	public function __construct($renderLoop, $platformGraphics, $batchObjectPool, $batchMemoryPool){}
}
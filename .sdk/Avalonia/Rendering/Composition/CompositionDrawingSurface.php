<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositionDrawingSurfaceOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
}
class CompositionDrawingSurface extends \Avalonia\Rendering\Composition\CompositionSurface implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\System\IDisposable
{
	use CompositionDrawingSurfaceOverride;
	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public $ImplicitAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \System\Threading\Tasks\Task
	 */
	public function UpdateWithKeyedMutexAsync($image, $acquireIndex, $releaseIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore $waitForSemaphore
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore $signalSemaphore
	 * @return \System\Threading\Tasks\Task
	 */
	public function UpdateWithSemaphoresAsync($image, $waitForSemaphore, $signalSemaphore){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @return \System\Threading\Tasks\Task
	 */
	public function UpdateAsync($image){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}
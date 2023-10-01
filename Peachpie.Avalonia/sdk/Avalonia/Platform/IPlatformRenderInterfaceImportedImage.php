<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformRenderInterfaceImportedImage
{
	/**
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 */
	public function SnapshotWithKeyedMutex($acquireIndex, $releaseIndex);
	/**
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $waitForSemaphore
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $signalSemaphore
	 */
	public function SnapshotWithSemaphores($waitForSemaphore, $signalSemaphore);
	/**
	 */
	public function SnapshotWithAutomaticSync();
}

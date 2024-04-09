<?php
namespace Avalonia\Platform;
interface IPlatformRenderInterfaceImportedImage
{

	/**
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function SnapshotWithKeyedMutex($acquireIndex, $releaseIndex);
	/**
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $waitForSemaphore
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $signalSemaphore
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function SnapshotWithSemaphores($waitForSemaphore, $signalSemaphore);
	/**
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public function SnapshotWithAutomaticSync();
}
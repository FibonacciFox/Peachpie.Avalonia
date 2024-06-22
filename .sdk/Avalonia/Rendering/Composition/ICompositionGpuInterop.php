<?php
namespace Avalonia\Rendering\Composition;
interface ICompositionGpuInterop
{


	/**
	 * @param \System\String|string $imageHandleType
	 * @return \Avalonia\Rendering\Composition\CompositionGpuImportedImageSynchronizationCapabilities
	 */
	public function GetSynchronizationCapabilities($imageHandleType);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $properties
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	public function ImportImage($handle, $properties);
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextImage $image
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	public function ImportImage($image);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore
	 */
	public function ImportSemaphore($handle);
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextSemaphore $image
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	public function ImportSemaphore($image);
}
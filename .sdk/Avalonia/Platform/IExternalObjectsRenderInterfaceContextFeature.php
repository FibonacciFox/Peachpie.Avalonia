<?php
namespace Avalonia\Platform;
interface IExternalObjectsRenderInterfaceContextFeature
{

	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $properties
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	public function ImportImage($handle, $properties);
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextImage $image
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	public function ImportImage($image);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
	 */
	public function ImportSemaphore($handle);
	/**
	 * @param \System\String|string $imageHandleType
	 * @return \Avalonia\Rendering\Composition\CompositionGpuImportedImageSynchronizationCapabilities
	 */
	public function GetSynchronizationCapabilities($imageHandleType);
}
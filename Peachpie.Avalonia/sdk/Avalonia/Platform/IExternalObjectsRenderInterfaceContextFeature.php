<?php
namespace Avalonia\Platform;
/**
 */
interface IExternalObjectsRenderInterfaceContextFeature
{
	/**
	 */
	public function get_SupportedImageHandleTypes();
	/**
	 */
	public function get_SupportedSemaphoreTypes();
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 */
	public function ImportSemaphore($handle);
	/**
	 * @param \System\String|string $imageHandleType
	 */
	public function GetSynchronizationCapabilities($imageHandleType);
	/**
	 */
	public function get_DeviceUuid();
	/**
	 */
	public function get_DeviceLuid();
}

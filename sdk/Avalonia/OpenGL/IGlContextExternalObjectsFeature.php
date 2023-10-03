<?php
namespace Avalonia\OpenGL;
/**
 */
interface IGlContextExternalObjectsFeature
{
	/**
	 */
	public function get_SupportedImportableExternalImageTypes();
	/**
	 */
	public function get_SupportedExportableExternalImageTypes();
	/**
	 */
	public function get_SupportedImportableExternalSemaphoreTypes();
	/**
	 */
	public function get_SupportedExportableExternalSemaphoreTypes();
	/**
	 * @param \System\String|string $type
	 */
	public function GetSupportedFormatsForExternalMemoryType($type);
	/**
	 * @param \System\String|string $type
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageFormat $format
	 */
	public function CreateImage($type, $size, $format);
	/**
	 * @param \System\String|string $type
	 */
	public function CreateSemaphore($type);
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $properties
	 */
	public function ImportImage($handle, $properties);
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
	public function get_DeviceLuid();
	/**
	 */
	public function get_DeviceUuid();
}

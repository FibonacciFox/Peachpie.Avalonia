<?php
namespace Avalonia\Rendering\Composition;
/**
 */
interface ICompositionGpuInterop
{
	/**
	 */
	public function get_SupportedImageHandleTypes();
	/**
	 */
	public function get_SupportedSemaphoreTypes();
	/**
	 * @param \System\String|string $imageHandleType
	 */
	public function GetSynchronizationCapabilities($imageHandleType);
	/**
	 */
	public function get_IsLost();
	/**
	 */
	public function get_DeviceLuid();
	/**
	 * @param \System\Byte[] $value
	 */
	public function set_DeviceLuid($value);
	/**
	 */
	public function get_DeviceUuid();
	/**
	 * @param \System\Byte[] $value
	 */
	public function set_DeviceUuid($value);
}

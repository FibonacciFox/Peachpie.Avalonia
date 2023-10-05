<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 */
class AngleExternalObjectsFeature extends \System\Object implements 
	\Avalonia\OpenGL\IGlContextExternalObjectsFeature,
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedImportableExternalImageTypes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedExportableExternalImageTypes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedImportableExternalSemaphoreTypes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedExportableExternalSemaphoreTypes;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $DeviceLuid;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public readonly $DeviceUuid;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedImportableExternalImageTypes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedExportableExternalImageTypes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedImportableExternalSemaphoreTypes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedExportableExternalSemaphoreTypes(){}
	/**
	 * @param \System\String|string $type
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetSupportedFormatsForExternalMemoryType($type){}
	/**
	 * @param \System\String|string $type
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageFormat $format
	 * @return \Avalonia\OpenGL\IGlExportableExternalImageTexture
	 */
	public  function CreateImage($type, $size, $format){}
	/**
	 * @param \System\String|string $type
	 * @return \Avalonia\OpenGL\IGlExportableExternalImageTexture
	 */
	public  function CreateSemaphore($type){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $properties
	 * @return \Avalonia\OpenGL\IGlExternalImageTexture
	 */
	public  function ImportImage($handle, $properties){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\OpenGL\IGlExternalSemaphore
	 */
	public  function ImportSemaphore($handle){}
	/**
	 * @param \System\String|string $imageHandleType
	 * @return \Avalonia\Rendering\Composition\CompositionGpuImportedImageSynchronizationCapabilities
	 */
	public  function GetSynchronizationCapabilities($imageHandleType){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_DeviceLuid(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_DeviceUuid(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

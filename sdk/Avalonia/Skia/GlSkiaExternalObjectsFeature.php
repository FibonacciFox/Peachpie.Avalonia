<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlSkiaExternalObjectsFeatureMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	#[MethodOverride] public  function ImportImage_1($handle, $properties){}
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	#[MethodOverride] public  function ImportImage_2($image){}
}
/**
 */
class GlSkiaExternalObjectsFeature extends \System\Object implements 
	\Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedImageHandleTypes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedSemaphoreTypes(){}
	/**
	 * @uses GlSkiaExternalObjectsFeatureMethodsOverride::ImportImage_1 ($handle, $properties)
	 * @uses GlSkiaExternalObjectsFeatureMethodsOverride::ImportImage_2 ($image)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ImportImage(mixed ...$args){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
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
	public  function get_DeviceUuid(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_DeviceLuid(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

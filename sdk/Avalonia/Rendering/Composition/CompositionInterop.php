<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionInteropMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride] public  function ImportImage_1($handle, $properties){}
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride] public  function ImportImage_2($image){}
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore
	 */
	#[MethodOverride] public  function ImportSemaphore_1($handle){}
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride] public  function ImportSemaphore_2($image){}
}
/**
 */
class CompositionInterop extends \System\Object implements 
	\Avalonia\Rendering\Composition\ICompositionGpuInterop
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedImageHandleTypes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public readonly $SupportedSemaphoreTypes;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLost;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public $DeviceLuid;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public $DeviceUuid;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedImageHandleTypes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SupportedSemaphoreTypes(){}
	/**
	 * @param \System\String|string $imageHandleType
	 * @return \Avalonia\Rendering\Composition\CompositionGpuImportedImageSynchronizationCapabilities
	 */
	public  function GetSynchronizationCapabilities($imageHandleType){}
	/**
	 * @uses CompositionInteropMethodsOverride::ImportImage_1 ($handle, $properties)
	 * @uses CompositionInteropMethodsOverride::ImportImage_2 ($image)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ImportImage(mixed ...$args){}
	/**
	 * @uses CompositionInteropMethodsOverride::ImportSemaphore_1 ($handle)
	 * @uses CompositionInteropMethodsOverride::ImportSemaphore_2 ($image)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ImportSemaphore(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_DeviceLuid(){}
	/**
	 * @param \System\Byte[] $value
	 * @return \System\Void|void
	 */
	public  function set_DeviceLuid($value){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_DeviceUuid(){}
	/**
	 * @param \System\Byte[] $value
	 * @return \System\Void|void
	 */
	public  function set_DeviceUuid($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

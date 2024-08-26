<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositionInteropOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $properties
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride]public function ImportImage_1 ($handle, $properties){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextImage $image
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride]public function ImportImage_2 ($image){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore
	 */
	#[MethodOverride]public function ImportSemaphore_1 ($handle){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\ICompositionImportableSharedGpuContextSemaphore $image
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage
	 */
	#[MethodOverride]public function ImportSemaphore_2 ($image){}
}
class CompositionInterop extends \System\Object implements
	\Avalonia\Rendering\Composition\ICompositionGpuInterop
{
	use CompositionInteropOverride;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @since readonly
	 */
	public $SupportedImageHandleTypes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @since readonly
	 */
	public $SupportedSemaphoreTypes;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLost;
	/**
	 * @property
	 * @var \System\Byte[]
	 */
	public $DeviceLuid;
	/**
	 * @property
	 * @var \System\Byte[]
	 */
	public $DeviceUuid;
	/**
	 * @param \System\String|string $imageHandleType
	 * @return \Avalonia\Rendering\Composition\CompositionGpuImportedImageSynchronizationCapabilities
	 */
	public function GetSynchronizationCapabilities($imageHandleType){}
	/**
	 * @uses CompositionInteropOverride::ImportImage_1 <br>public , args: ($handle, $properties)<br>
	 * @uses CompositionInteropOverride::ImportImage_2 <br>public , args: ($image)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuImage|mixed|\override
	 */
	#[MethodOverridePublic]function ImportImage (\override ...$args){}
	/**
	 * @uses CompositionInteropOverride::ImportSemaphore_1 <br>public , args: ($handle)<br>
	 * @uses CompositionInteropOverride::ImportSemaphore_2 <br>public , args: ($image)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore|\Avalonia\Rendering\Composition\ICompositionImportedGpuImage|mixed|\override
	 */
	#[MethodOverridePublic]function ImportSemaphore (\override ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature $externalObjects
	 */
	public function __construct($compositor, $externalObjects){}
}
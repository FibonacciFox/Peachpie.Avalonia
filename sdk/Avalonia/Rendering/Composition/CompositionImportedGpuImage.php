<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class CompositionImportedGpuImage extends \Avalonia\Rendering\Composition\CompositionGpuImportedObjectBase implements 
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable,
	\Avalonia\Rendering\Composition\ICompositionImportedGpuImage
{
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	public  function get_Image(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUsable(){}
}

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
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 * @property
	 */
	public readonly $Image;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUsable;
	/**
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceContext
	 * @property
	 */
	public readonly $Context;
	/**
	 * @var \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature
	 * @property
	 */
	public readonly $Feature;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $ImportCompleted;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $ImportCompeted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLost;
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 */
	public  function get_Image(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUsable(){}
}

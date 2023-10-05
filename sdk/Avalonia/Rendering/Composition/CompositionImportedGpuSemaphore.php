<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class CompositionImportedGpuSemaphore extends \Avalonia\Rendering\Composition\CompositionGpuImportedObjectBase implements 
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable,
	\Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore
{
	/**
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
	 * @property
	 */
	public readonly $Semaphore;
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
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
	 */
	public  function get_Semaphore(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUsable(){}
}

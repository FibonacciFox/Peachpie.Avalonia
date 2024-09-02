<?php
namespace Avalonia\Rendering\Composition;
class CompositionImportedGpuSemaphore extends \Avalonia\Rendering\Composition\CompositionGpuImportedObjectBase implements
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable,
	\Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore
{
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
	 * @since readonly
	 */
	public $Semaphore;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsUsable;
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceContext
	 * @since readonly
	 */
	public $Context;
	/**
	 * @property
	 * @var \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature
	 * @since readonly
	 */
	public $Feature;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $ImportCompleted;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $ImportCompeted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLost;
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $handle
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceContext $context
	 * @param \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature $feature
	 */
	public function __construct($handle, $compositor, $context, $feature){}
}
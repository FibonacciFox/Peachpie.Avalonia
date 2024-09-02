<?php
namespace Avalonia\Rendering\Composition;
class CompositionImportedGpuImage extends \Avalonia\Rendering\Composition\CompositionGpuImportedObjectBase implements
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable,
	\Avalonia\Rendering\Composition\ICompositionImportedGpuImage
{
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceImportedImage
	 * @since readonly
	 */
	public $Image;
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
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceContext $context
	 * @param \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature $feature
	 * @param \System\Func_1 $importer [generic: Avalonia\Platform\IPlatformRenderInterfaceImportedImage]
	 */
	public function __construct($compositor, $context, $feature, $importer){}
}
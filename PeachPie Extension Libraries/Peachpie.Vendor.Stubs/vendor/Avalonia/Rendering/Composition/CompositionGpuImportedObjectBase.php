<?php
namespace Avalonia\Rendering\Composition;
class CompositionGpuImportedObjectBase extends \System\Object implements
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable
{
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
	 * @return \System\Void|void
	 */
	abstract protected function Import();
	/**
	 * @return \System\Void|void
	 */
	abstract public function Dispose();
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceContext $context
	 * @param \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature $feature
	 */
	public function __construct($compositor, $context, $feature){}
}
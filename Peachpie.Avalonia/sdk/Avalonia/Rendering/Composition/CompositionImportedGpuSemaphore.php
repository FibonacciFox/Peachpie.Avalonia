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
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore
	 */
	public  function get_Semaphore(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUsable(){}
}

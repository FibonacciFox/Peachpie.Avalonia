<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class CompositionGpuImportedObjectBase extends \System\Object implements 
	\Avalonia\Rendering\Composition\ICompositionGpuImportedObject,
	\System\IAsyncDisposable
{
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	protected  function get_Compositor(){}
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceContext
	 */
	public  function get_Context(){}
	/**
	 * @return \Avalonia\Platform\IExternalObjectsRenderInterfaceContextFeature
	 */
	public  function get_Feature(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Import(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_ImportCompleted(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_ImportCompeted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

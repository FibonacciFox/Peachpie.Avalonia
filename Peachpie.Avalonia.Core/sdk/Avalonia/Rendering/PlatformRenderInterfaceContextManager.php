<?php
namespace Avalonia\Rendering;
/**
 */
class PlatformRenderInterfaceContextManager extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public  function EnsureValidBackendContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformRenderInterfaceContext
	 */
	public  function get_Value(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	protected  function get_GpuContext(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public  function CreateRenderTarget($surfaces){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

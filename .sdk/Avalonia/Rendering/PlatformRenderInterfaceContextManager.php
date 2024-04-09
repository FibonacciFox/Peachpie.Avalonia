<?php
namespace Avalonia\Rendering;
class PlatformRenderInterfaceContextManager extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformRenderInterfaceContext
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function add_ContextDisposed($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public function remove_ContextDisposed($value){}
	/**
	 * @param \System\Action_1 $value [generic: Avalonia\Platform\IPlatformRenderInterfaceContext]
	 * @return \System\Void|void
	 */
	public function add_ContextCreated($value){}
	/**
	 * @param \System\Action_1 $value [generic: Avalonia\Platform\IPlatformRenderInterfaceContext]
	 * @return \System\Void|void
	 */
	public function remove_ContextCreated($value){}
	/**
	 * @return \System\Void|void
	 */
	public function EnsureValidBackendContext(){}
	/**
	 * @return \System\IDisposable
	 */
	public function EnsureCurrent(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces [generic: System\Object]
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public function CreateRenderTarget($surfaces){}
	/**
	 * @param \Avalonia\Platform\IPlatformGraphics $graphics
	 */
	public function __construct($graphics){}
}
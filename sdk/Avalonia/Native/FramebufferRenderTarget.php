<?php
namespace Avalonia\Native;
/**
 */
class FramebufferRenderTarget extends \System\Object implements 
	\Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

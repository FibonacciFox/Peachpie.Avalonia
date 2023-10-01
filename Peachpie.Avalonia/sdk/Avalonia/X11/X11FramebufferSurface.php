<?php
namespace Avalonia\X11;
/**
 */
class X11FramebufferSurface extends \System\Object implements 
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

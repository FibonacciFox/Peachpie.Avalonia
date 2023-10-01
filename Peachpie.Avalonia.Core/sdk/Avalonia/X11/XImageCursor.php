<?php
namespace Avalonia\X11;
/**
 */
class XImageCursor extends \Avalonia\X11\CursorImpl implements 
	\Avalonia\Platform\ICursorImpl,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface,
	\Avalonia\Platform\IPlatformHandle
{
	/**
	 * @return \System\String|string
	 */
	public  function get_HandleDescriptor(){}
	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public  function Lock(){}
	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public  function CreateFramebufferRenderTarget(){}
}

<?php
namespace Avalonia\X11;
/**
 */
class X11IconData extends \System\Object implements 
	\Avalonia\Platform\IWindowIconImpl,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
	/**
	 * @return \System\UIntPtr[]
	 */
	public  function get_Data(){}
	/**
	 * @param \System\IO\Stream $outputStream
	 * @return \System\Void|void
	 */
	public  function Save($outputStream){}
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

<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 */
class AngleD3DTextureFeature extends \System\Object implements 
	\Avalonia\OpenGL\IGlPlatformSurfaceRenderTargetFactory
{
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \System\Object|object $surface
	 * @return \System\Boolean
	 */
	public  function CanRenderToSurface($context, $surface){}
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \System\Object|object $surface
	 * @return \Avalonia\OpenGL\Surfaces\IGlPlatformSurfaceRenderTarget
	 */
	public  function CreateRenderTarget($context, $surface){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\OpenGL;
/**
 */
interface IGlPlatformSurfaceRenderTargetFactory
{
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \System\Object|object $surface
	 */
	public function CanRenderToSurface($context, $surface);
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \System\Object|object $surface
	 */
	public function CreateRenderTarget($context, $surface);
}

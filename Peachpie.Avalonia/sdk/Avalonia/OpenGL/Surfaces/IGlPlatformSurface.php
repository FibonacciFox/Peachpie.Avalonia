<?php
namespace Avalonia\OpenGL\Surfaces;
/**
 */
interface IGlPlatformSurface
{
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 */
	public function CreateGlRenderTarget($context);
}

<?php
namespace Avalonia\OpenGL;
/**
 */
interface IOpenGlTextureSharingRenderInterfaceContextFeature
{
	/**
	 */
	public function get_CanCreateSharedContext();
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $preferredVersions
	 */
	public function CreateSharedContext($preferredVersions);
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \Avalonia\PixelSize $size
	 */
	public function CreateSharedTextureForComposition($context, $size);
}

<?php
namespace Avalonia\Controls\Platform\Surfaces;
interface IFramebufferPlatformSurface
{

	/**
	 * @return \Avalonia\Controls\Platform\Surfaces\IFramebufferRenderTarget
	 */
	public function CreateFramebufferRenderTarget();
}
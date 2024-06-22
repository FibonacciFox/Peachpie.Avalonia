<?php
namespace Avalonia\Controls\Platform\Surfaces;
interface IFramebufferRenderTarget
{


	/**
	 * @return \Avalonia\Platform\ILockedFramebuffer
	 */
	public function Lock();
}
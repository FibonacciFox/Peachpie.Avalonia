<?php
namespace Avalonia\Skia;
/**
 */
interface ISkiaGpu
{
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 */
	public function TryCreateRenderTarget($surfaces);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Skia\ISkiaGpuRenderSession $session
	 */
	public function TryCreateSurface($size, $session);
}

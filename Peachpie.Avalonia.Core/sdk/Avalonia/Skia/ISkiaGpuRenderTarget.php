<?php
namespace Avalonia\Skia;
/**
 */
interface ISkiaGpuRenderTarget
{
	/**
	 */
	public function BeginRenderingSession();
	/**
	 */
	public function get_IsCorrupted();
}

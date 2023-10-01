<?php
namespace Avalonia\Skia;
/**
 */
interface ISkiaGpuRenderSession
{
	/**
	 */
	public function get_GrContext();
	/**
	 */
	public function get_SkSurface();
	/**
	 */
	public function get_ScaleFactor();
	/**
	 */
	public function get_SurfaceOrigin();
}

<?php
namespace Avalonia\Skia;
/**
 */
interface ISkiaSharpApiLease
{
	/**
	 */
	public function get_SkCanvas();
	/**
	 */
	public function get_GrContext();
	/**
	 */
	public function get_SkSurface();
	/**
	 */
	public function get_CurrentOpacity();
}

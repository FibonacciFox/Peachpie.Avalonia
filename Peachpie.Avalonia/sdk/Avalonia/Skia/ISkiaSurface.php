<?php
namespace Avalonia\Skia;
/**
 */
interface ISkiaSurface
{
	/**
	 */
	public function get_Surface();
	/**
	 */
	public function get_CanBlit();
	/**
	 * @param \SkiaSharp\SKCanvas $canvas
	 */
	public function Blit($canvas);
}

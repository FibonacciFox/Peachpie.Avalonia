<?php
namespace Avalonia\Platform;
/**
 */
interface IGlyphRunImpl
{
	/**
	 */
	public function get_GlyphTypeface();
	/**
	 */
	public function get_FontRenderingEmSize();
	/**
	 */
	public function get_BaselineOrigin();
	/**
	 */
	public function get_Bounds();
	/**
	 * @param \System\Single $lowerLimit
	 * @param \System\Single $upperLimit
	 */
	public function GetIntersections($lowerLimit, $upperLimit);
}

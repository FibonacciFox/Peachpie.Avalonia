<?php
namespace Avalonia\Rendering;
/**
 */
interface IRenderRoot
{
	/**
	 */
	public function get_ClientSize();
	/**
	 */
	public function get_Renderer();
	/**
	 */
	public function get_HitTester();
	/**
	 */
	public function get_RenderScaling();
	/**
	 * @param \Avalonia\PixelPoint $point
	 */
	public function PointToClient($point);
	/**
	 * @param \Avalonia\Point $point
	 */
	public function PointToScreen($point);
}

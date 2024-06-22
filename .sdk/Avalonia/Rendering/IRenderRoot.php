<?php
namespace Avalonia\Rendering;
interface IRenderRoot
{


	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public function PointToClient($point);
	/**
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public function PointToScreen($point);
}
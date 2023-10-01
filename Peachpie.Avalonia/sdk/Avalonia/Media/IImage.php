<?php
namespace Avalonia\Media;
/**
 */
interface IImage
{
	/**
	 */
	public function get_Size();
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 */
	public function Draw($context, $sourceRect, $destRect);
}

<?php
namespace Avalonia\Media;
interface IImage
{


	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @param \Avalonia\Rect $sourceRect
	 * @param \Avalonia\Rect $destRect
	 * @return \System\Void|void
	 */
	public function Draw($context, $sourceRect, $destRect);
}
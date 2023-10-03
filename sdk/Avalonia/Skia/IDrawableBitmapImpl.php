<?php
namespace Avalonia\Skia;
/**
 */
interface IDrawableBitmapImpl
{
	/**
	 * @param \Avalonia\Skia\DrawingContextImpl $context
	 * @param \SkiaSharp\SKRect $sourceRect
	 * @param \SkiaSharp\SKRect $destRect
	 * @param \SkiaSharp\SKPaint $paint
	 */
	public function Draw($context, $sourceRect, $destRect, $paint);
}

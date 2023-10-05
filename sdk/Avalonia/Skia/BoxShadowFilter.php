<?php
namespace Avalonia\Skia;
/**
 */
class BoxShadowFilter extends \System\ValueType implements 
	\System\IDisposable
{
	/**
	 * @var \SkiaSharp\SKPaint
	 * @field
	 */
	public readonly $Paint;
	/**
	 * @var \SkiaSharp\SKClipOperation
	 * @field
	 */
	public readonly $ClipOperation;
	/**
	 * @param \SkiaSharp\SKPaint $paint
	 * @param \Avalonia\Media\BoxShadow $shadow
	 * @param \System\Double|double $opacity
	 * @return \Avalonia\Skia\BoxShadowFilter
	 */
	public static function Create($paint, $shadow, $opacity){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}

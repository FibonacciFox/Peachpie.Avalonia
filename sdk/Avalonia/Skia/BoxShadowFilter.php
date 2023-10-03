<?php
namespace Avalonia\Skia;
/**
 */
class BoxShadowFilter extends \System\ValueType implements 
	\System\IDisposable
{
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

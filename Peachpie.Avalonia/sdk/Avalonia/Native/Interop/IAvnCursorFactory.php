<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnCursorFactory
{
	/**
	 * @param \Avalonia\Native\Interop\AvnStandardCursorType $cursorType
	 */
	public function GetCursor($cursorType);
	/**
	 * @param \System\Void* $bitmapData
	 * @param \System\IntPtr $length
	 * @param \Avalonia\Native\Interop\AvnPixelSize $hotPixel
	 */
	public function CreateCustomCursor($bitmapData, $length, $hotPixel);
}

<?php
namespace Avalonia\Platform;
/**
 */
interface ICursorFactory
{
	/**
	 * @param \Avalonia\Input\StandardCursorType $cursorType
	 */
	public function GetCursor($cursorType);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $cursor
	 * @param \Avalonia\PixelPoint $hotSpot
	 */
	public function CreateCursor($cursor, $hotSpot);
}

<?php
namespace Avalonia\Platform;
interface ICursorFactory
{

	/**
	 * @param \Avalonia\Input\StandardCursorType $cursorType
	 * @return \Avalonia\Platform\ICursorImpl
	 */
	public function GetCursor($cursorType);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $cursor
	 * @param \Avalonia\PixelPoint $hotSpot
	 * @return \Avalonia\Platform\ICursorImpl
	 */
	public function CreateCursor($cursor, $hotSpot);
}
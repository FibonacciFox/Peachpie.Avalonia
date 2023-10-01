<?php
namespace Avalonia\Native;
/**
 */
class CursorFactory extends \System\Object implements 
	\Avalonia\Platform\ICursorFactory
{
	/**
	 * @param \Avalonia\Input\StandardCursorType $cursorType
	 * @return \Avalonia\Platform\ICursorImpl
	 */
	public  function GetCursor($cursorType){}
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $cursor
	 * @param \Avalonia\PixelPoint $hotSpot
	 * @return \Avalonia\Platform\ICursorImpl
	 */
	public  function CreateCursor($cursor, $hotSpot){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

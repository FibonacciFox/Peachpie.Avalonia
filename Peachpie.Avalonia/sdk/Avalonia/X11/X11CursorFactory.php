<?php
namespace Avalonia\X11;
/**
 */
class X11CursorFactory extends \System\Object implements 
	\Avalonia\Platform\ICursorFactory
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAllCursorShapes(){}
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
	 * @param \System\IntPtr $display
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNullCursor($display){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

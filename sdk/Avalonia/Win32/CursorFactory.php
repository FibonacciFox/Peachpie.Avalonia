<?php
namespace Avalonia\Win32;
/**
 */
class CursorFactory extends \System\Object implements 
	\Avalonia\Platform\ICursorFactory
{
	/**
	 * @var \Avalonia\Win32\CursorFactory
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Win32\CursorFactory
	 */
	public static function get_Instance(){}
	/**
	 * @param \Avalonia\Input\StandardCursorType $cursorType
	 * @param \System\String|string $module
	 * @param \System\Int32|int $id
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadModuleCursor($cursorType, $module, $id){}
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
	 * @param \Avalonia\Platform\IBitmapImpl $bitmap
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadSystemDrawingBitmap($bitmap){}
	/**
	 * @param \System\Drawing\Bitmap $source
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AlphaToMask($source){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

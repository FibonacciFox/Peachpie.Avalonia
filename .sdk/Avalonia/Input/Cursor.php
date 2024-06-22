<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RoutedEventRegistryOverride {
	/**
	 * @param \Avalonia\Input\StandardCursorType $cursorType
	 */
	#[MethodOverride]public function __construct_1 ($cursorType){}
	/**
	 * @param \Avalonia\Media\Imaging\Bitmap $cursor
	 * @param \Avalonia\PixelPoint $hotSpot
	 */
	#[MethodOverride]public function __construct_2 ($cursor, $hotSpot){}
}
class Cursor extends \System\Object implements
	\System\IDisposable
{
	use RoutedEventRegistryOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Input\Cursor
	 */
	public static $Default;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Input\Cursor
	 */
	public static function Parse($s){}
	private static function GetCursorFactory(){}
	/**
	 * @uses CursorOverride::__construct_1 <br>public , args: ($cursorType)<br>
	 * @uses CursorOverride::__construct_2 <br>public , args: ($cursor, $hotSpot)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}
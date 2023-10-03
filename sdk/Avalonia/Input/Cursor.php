<?php
namespace Avalonia\Input;
/**
 */
class Cursor extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Platform\ICursorImpl
	 */
	protected  function get_PlatformImpl(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Input\Cursor
	 */
	public static function Parse($s){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCursorFactory(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\FreeDesktop\DBusIme;
/**
 */
class X11DBusImeHelper extends \System\Object
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DetectInputMethod(){}
	/**
	 * @return \System\Boolean
	 */
	public static function DetectAndRegister(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\X11;
/**
 */
class XError extends \System\Object
{
	/**
	 * @var \Avalonia\X11\XErrorEvent
	 * @field
	 */
	public $LastError;
	/**
	 * @param \System\IntPtr $display
	 * @param \Avalonia\X11\XErrorEvent& $error
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Handler($display, $error){}
	/**
	 * @param \System\String|string $desc
	 * @return \System\Void|void
	 */
	public static function ThrowLastError($desc){}
	/**
	 * @return \System\Void|void
	 */
	public static function Init(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

<?php
namespace Avalonia\Win32;
/**
 */
class Win32GlManager extends \System\Object
{
	/**
	 * @return \Avalonia\Platform\IPlatformGraphics
	 */
	public static function Initialize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeCore(){}
	/**
	 * @param \Avalonia\Win32PlatformOptions $opts
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryRegisterComposition($opts){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

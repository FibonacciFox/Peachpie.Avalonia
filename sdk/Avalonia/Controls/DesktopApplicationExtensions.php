<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DesktopApplicationExtensionsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Run_1($app, $closable){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Run_2($app, $mainWindow){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Run_3($app, $token){}
}
/**
 */
class DesktopApplicationExtensions extends \System\Object
{
	/**
	 * @uses DesktopApplicationExtensionsMethodsOverride::Run_1 ($app, $closable)
	 * @uses DesktopApplicationExtensionsMethodsOverride::Run_2 ($app, $mainWindow)
	 * @uses DesktopApplicationExtensionsMethodsOverride::Run_3 ($app, $token)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Run(mixed ...$args){}
	/**
	 * @param \Avalonia\Application $app
	 * @return \System\Void|void
	 */
	public static function RunWithMainWindow($app){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}

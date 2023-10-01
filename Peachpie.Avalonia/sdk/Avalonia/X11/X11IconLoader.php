<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait X11IconLoaderMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] private static function LoadIcon_1($bitmap){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_2($fileName){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_3($stream){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_4($bitmap){}
}
/**
 */
class X11IconLoader extends \System\Object implements 
	\Avalonia\Platform\IPlatformIconLoader
{
	/**
	 * @uses X11IconLoaderMethodsOverride::LoadIcon_1 ($bitmap)
	 * @uses X11IconLoaderMethodsOverride::LoadIcon_2 ($fileName)
	 * @uses X11IconLoaderMethodsOverride::LoadIcon_3 ($stream)
	 * @uses X11IconLoaderMethodsOverride::LoadIcon_4 ($bitmap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadIcon(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
